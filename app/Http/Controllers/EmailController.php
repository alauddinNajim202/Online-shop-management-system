<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Notifications\SendEmailNotification;
use Illuminate\Http\Request;
use Notification;

class EmailController extends Controller
{
    public function sendEmail($id){

        $order = Order::findOrfail($id);
        return view('admin.order.emailnotification', compact('order'));
    }

    public function userUendEmail(Request $request , $id){

        $order = Order::find($id);

        $details =[
            'greeting' => $request->greeting,
            'firstline' => $request->firstline,
            'body' => $request->body,
            'button' => $request->button,
            'url' => $request->url,
            'lastline' => $request->lastline,
        ];

        Notification::send($order, new SendEmailNotification($details));

        return redirect()->back();

    }






}
