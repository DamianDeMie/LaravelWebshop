<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class CartController extends Controller
{
    public function destroyCart()
    {
        Session::forget('cart');
        return redirect('/');
    }
}
