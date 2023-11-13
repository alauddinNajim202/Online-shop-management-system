<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Contact;
use App\Models\Order;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\User;
use App\Models\Product;
use Session;
use Stripe;

class HomeController extends Controller
{

    public function index(){

        $products = Product::paginate(6);
        $comment = Comment::orderBy('id', 'DESC')->get();
        $testimonial = Testimonial::all();
        return view('frontend.home',compact('products','comment','testimonial'));
    }

    public function about(){


        return view('frontend.about');
    }


    public function contact(){
        return view('frontend.contact');
    }

    public function updateContact(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'message' => 'required',

        ]);
        Contact::insert([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'message' => $request->name,

        ]);

        return redirect()->route('contacts')->with('message','Information and message send successfully');
    }


    public function product(){
        $products = Product::paginate(6);
        return view('frontend.product',compact('products'));
    }
    public function redirect(){
        $usertype = Auth::user()->usertype;

        if($usertype == '1'){
            $user = User::where('usertype',0)->count();
            $products = Product::count();
            $category = Category::count();
            $order = Order::count();
            $price = Order::sum('price');
            $order_quantity = Order::sum('quantity');
            $order_stripe = Order::where('payment_status','Payment in Card')->sum('price');
            $order_cash = Order::where('payment_status','Cash on delivery')->sum('price');



            return view('admin.home', compact('user','products','category','order','price','order_quantity','order_stripe','order_cash'));
        }else{
            $products = Product::paginate(6);
            $comment = Comment::orderBy('id', 'DESC')->get();
            return view('frontend.home',compact('products','comment'));
        }
    }


    public function details($id){

        $products = Product::findOrfail($id);

        return view('frontend.productdetails', compact('products'));
    }


    public function AddToCart(Request $request, $id){

        if(Auth::id()){

            $user = Auth::user();

            $product = Product::find($id);

            $cart = new Cart();
            $cart->user_id = $user->id;
            $cart->product_id = $product->id;
            $cart->user_name = $user->name;
            $cart->user_email = $user->email;
            $cart->user_phone = $user->phone;
            $cart->user_address = $user->address;
            $cart->product_title = $product->title;
            if($product->discount != null){
                $cart->price = $product->discount * $request->quantity;
            }else{
                $cart->price = $product->price * $request->quantity;
            }
            $cart->image = $product->image;
            $cart->quantity = $request->quantity;

            $cart->save();
            Alert::success('Product Added successfully');
            return redirect()->back();

        }else{
            return redirect('login');
        }
    }


    public function showCart(){

        if(Auth::id()){

            $user_id = Auth::user()->id;
            // dd($user_id);

            $carts = Cart::where('user_id', $user_id)->paginate(3);
            $allcarts = Cart::count();
            return view('frontend.showcart',compact('carts','allcarts'));
        }else{
            return redirect('login');
        }



    }

    public function removeItem($id){


        Cart::findOrfail($id)->delete();

        return redirect()->back()->with('message','Itemd deleted successfully');

    }


    public function cashOndelivery(){

        $user_id = Auth::user()->id;

        $order_data = Cart::where('user_id', $user_id)->get();

        foreach ($order_data as $data) {

            $order = new Order();

            $order->user_id = $data->user_id;
            $order->user_name =  $data->user_name;
            $order->user_email =  $data->user_email;
            $order->user_phone =  $data->user_phone;
            $order->user_address = $data->user_address;

            $order->product_id = $data->product_id;
            $order->product_title =  $data->product_title;
            $order->price =  $data->price;
            $order->image =  $data->image;
            $order->quantity = $data->quantity;
            $order->payment_status = "Cash on delivery";
            $order->order_status = "processing";

            $order->save();

            $order_id = $data->id;

            Cart::findOrfail($order_id)->delete();



        }

        return redirect()->back()->with('message', 'We have received your order, we will connect with you as soon as possible ');

    }


    public function paymentCard($totalprice){
        return view('frontend.paymentincard',compact('totalprice'));
    }

    public function stripeCard(Request $request,$totalprice){

        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        Stripe\Charge::create ([
                "amount" => $totalprice * 100,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "Payment successfully"
        ]);

        $user_id = Auth::user()->id;

        $order_data = Cart::where('user_id', $user_id)->get();

        foreach ($order_data as $data) {

            $order = new Order();

            $order->user_id = $data->user_id;
            $order->user_name =  $data->user_name;
            $order->user_email =  $data->user_email;
            $order->user_phone =  $data->user_phone;
            $order->user_address = $data->user_address;

            $order->product_id = $data->product_id;
            $order->product_title =  $data->product_title;
            $order->price =  $data->price;
            $order->image =  $data->image;
            $order->quantity = $data->quantity;
            $order->payment_status = "Payment in Card";
            $order->order_status = "processing";

            $order->save();

            $order_id = $data->id;

            Cart::findOrfail($order_id)->delete();



        }

        Session::flash('success', 'Payment successful!');

        return back();

    }

}
