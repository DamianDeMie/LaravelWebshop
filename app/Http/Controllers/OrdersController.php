<?php

namespace App\Http\Controllers;

use App\Orders;
use Illuminate\Http\Request;
use Auth;

class OrdersController extends Controller
{
    public function processOrder(Request $request)
    {
        Orders::create(['user_id' => $request->user_id, 'user_email' => $request->user_email, 'order_total' => $request->order_total]);
        return redirect('/destroyCart');
    }

    public function showOrders()
    {
        $userOrders = Orders::get()->where('user_id', Auth::user()->id);
        return view('home')->with([
            'userOrders' => $userOrders
        ]);
    }
}
