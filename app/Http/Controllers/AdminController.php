<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use App\Models\Testimonial;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){

        $user = User::where('usertype',0)->count();
        $products = Product::count();
        $category = Category::count();
        $order = Order::count();
        $price = Order::sum('price');
        $order_quantity = Order::sum('quantity');
        $order_stripe = Order::where('payment_status','Payment in Card')->sum('price');
        $order_cash = Order::where('payment_status','Cash on delivery')->sum('price');

        return view('admin.home', compact('user','products','category','order','price','order_quantity','order_stripe','order_cash'));
    }


    public function testimonial(){
        return view('admin.testimonial');
    }


    public function createTestimonial(Request $request){

        $request->validate([
            'name' => 'required',
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:6048',
        ]);

        // $imageName = time() . '.' . $request->image->extension();
        // $request->image->storeAs('images', $imageName, 's3');

        $path = public_path('images/');
        !is_dir($path) &&
            mkdir($path, 0777, true);

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move($path, $imageName);

        $testimonial  = new Testimonial;
        $testimonial->name = $request->name;
        $testimonial->title = $request->title;
        $testimonial->description = $request->description;
        $testimonial->image = $imageName;




        $testimonial->save();



        return redirect()->route('admin.testimonial')->with('message','Testimonial created successfully');
    }

}
