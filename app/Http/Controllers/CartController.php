<?php

namespace App\Http\Controllers;

use App\Cart;

class CartController extends Controller
{
    /**
     * Destroys the Cart Item once the order has been placed.
     *
     * @return void
     */
    public function destroyCart()
    {
        //Creates a cart using the Cart Model.
        $cart = new Cart();
        //Executes the deleteCart function in the Cart Model.
        $cart->deleteCart();
        //Redirects back to homepage.
        return redirect('/');
    }
}
