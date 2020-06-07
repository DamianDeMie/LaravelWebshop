<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

use App\Categories;
use App\Products;
use App\Cart;

class ProductsController extends Controller
{
    public function showProduct($id)
    {
        $product = Products::find($id);
        $categories = Categories::all();
        return view('products.details', ['product' => $product, 'categories' => $categories]);
    }

    public function AddProductToCart(Request $request, $id)
    {
        $product = Products::find($id);
        $oldCart = Session::has('cart') ? Session::Get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->addItem($product, $product->id);

        $request->session()->put('cart', $cart);
        return redirect()->back()->with('message', "Uw product '{{$product->product_name}}' is toegevoegd aan uw winkelwagen!");
    }
}
