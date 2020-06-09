<?php

namespace App\Http\Controllers;

use App\Orders;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function processOrder(Request $request)
    {
        Orders::create(['user_id' => $request->user_id, 'user_email' => $request->user_email, 'order_total' => $request->order_total]);
        return redirect('/destroyCart');
    }
}
