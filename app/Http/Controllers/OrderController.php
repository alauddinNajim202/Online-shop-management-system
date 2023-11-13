<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use PDF;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(){

        $orders = Order::all();
        return view('admin.order.orderdetails',compact('orders'));
    }


    public function delete($id){

        Order::findOrfail($id)->delete();

        return redirect()->back()->with('message','Order deleted successfully');

    }


    public function delivered($id){

        $order = Order::findOrfail($id);

        $order->order_status = "Delivered";
        $order->payment_status = "Paid";
        $order->save();

        return redirect()->back()->with('message','Order delivered successfully');

    }


    public function downloadPDF($id){
        $order_details = Order::find($id);
        $pdf = \Barryvdh\DomPDF\Facade\Pdf::loadView('admin.downloadorder',compact('order_details')); //line 14
        return $pdf->download('order_receipt.pdf');

    }


    public function search(Request $request){

        $searchText = $request->search;

        $orders = Order::
        where('user_email','LIKE',"%{$searchText}%")
        ->orWhere('user_name','LIKE',"%{$searchText}%")
        ->orWhere('product_title','LIKE',"%{$searchText}%")
        ->get();
        //dd($orders);
        return view('admin.order.orderdetails',compact('orders'));




    }

    // user order

    public function order(){

        if (Auth::id()) {

            $user_id = Auth::user()->id;
            $orders = Order::where('user_id',$user_id)->get();
            return view('frontend.order',compact('orders'));

        } else {
           return redirect('login');
        }

    }

    public function cancelorder($id){

        $order = Order::find($id);

        $order->order_status = "You canceled your order";

        $order->save();

        return redirect()->back();

    }


    public function comment(Request $request){

        if (Auth::id()) {

            $comment = new Comment();

            $comment->user_id = Auth::user()->id;
            $comment->name = Auth::user()->name;
            $comment->comment = $request->comment;

            $comment->save();

            return redirect()->back()->with('message','Thank you for your feedback,Please wait,we are reply as soon as possible');
        } else {
           return redirect('login');
        }

    }
}
