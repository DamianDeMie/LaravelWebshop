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
        return view('products.details', ['product' => $product, 'categories' => $categories, $cart = 'cart']);
    }

    public function AddProductToCart(Request $request, $id)
    {
        $product = Products::find($id);
        $cart = new Cart();
        $cart->addItem($product, $product->id);

        $request->session()->put('cart', $cart);
        return redirect()->back()->with('message', "Uw product '{{$product->product_name}}' is toegevoegd aan uw winkelwagen!");
    }

    public function getShoppingCart()
    {
        if (!Session::has('cart')) {
            return view('cart.contents', ['products' => null]);
        }
        $cart = new Cart();
        $totalprice = $cart->getTotalPrice();
        return view('cart.contents', ['products' => $cart->items, 'totalPrice' => $totalprice]);
    }

    public function changeItemAmount(Request $request, $id)
    {
        $itemQuantity = $request->get('quantityInput');
        $cart = new Cart();
        $cart->changeQuantity($itemQuantity, $id);
        return back();
    }

    public function deleteItem($id)
    {
        $cart = new Cart();
        $cart->deleteItem($id);
        return back();
    }
}
