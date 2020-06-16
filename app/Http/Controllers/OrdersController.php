<?php

namespace App\Http\Controllers;

use App\Orders;
use Illuminate\Http\Request;
use Auth;

class OrdersController extends Controller
{
    /**
     * Processes the order once the user presses the Checkout button.
     *
     * @param Request $request
     * @return mixed
     */
    public function processOrder(Request $request)
    {
        //Creates the order in the Orders table.
        Orders::create(['user_id' => $request->user_id, 'user_email' => $request->user_email, 'order_total' => $request->order_total]);
        //Redirects to the destroyCart function which removes the cart from the session.
        return redirect('/destroyCart');
    }

    /**
     * Shows all the orders that the user has.
     *
     * @return mixed
     */
    public function showOrders()
    {
        //Stores the orders in a array.
        $userOrders = Orders::get()->where('user_id', Auth::user()->id);
        //Redirects to the Orders view.
        return view('home')->with([
            'userOrders' => $userOrders
        ]);
    }
}
