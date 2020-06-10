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

    public function getShoppingCart()
    {
        if (!Session::has('cart')) {
            return view('cart.contents', ['products' => null]);
        }
        $oldCart = Session::Get('cart');
        $cart = new Cart($oldCart);
        return view('cart.contents', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }

    public function changeItemAmount(Request $request, $id)
    {
        $itemQuantity = $request->get('quantityInput');
        $oldCart = Session::Get('cart')->changeQuantity($itemQuantity, $id);
        $cart = new Cart($oldCart);
        return back();
    }

    public function deleteItem($id)
    {
        Session::Get('cart')->deleteItem($id);
        return back();
    }
}
