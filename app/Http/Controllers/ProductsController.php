<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Session;

use App\Categories;
use App\Products;
use App\Cart;

class ProductsController extends Controller
{
    /**
     * Shows the current product that you selected.
     *
     * @param [int] $id
     * @return void
     */

    public function showProduct($id)
    {
        //Stores the product in a variable using Eloquent.
        $product = Products::find($id);
        //Stores every category for the sideview.
        $categories = Categories::all();
        //Shows the product view with the data from the variables we just sent.
        return view('products.details', ['product' => $product, 'categories' => $categories, $cart = 'cart']);
    }

    /**
     * Adds a product to the shopping cart
     *
     * @param [int] $id
     * @return mixed
     */
    public function AddProductToCart($id)
    {
        //Stores the product in a variable using Eloquent.
        $product = Products::find($id);
        //Creates a new cart using the Cart Model.
        $cart = new Cart();
        //Executes the addItem function in the Cart Model to add the product to the cart.
        $cart->addItem($product, $product->id);

        //Redirects back with a message.
        return redirect()->back()->with('message', "Uw product '{{$product->product_name}}' is toegevoegd aan uw winkelwagen!");
    }

    /**
     * Gets the shopping cart.
     *
     * @return mixed
     */
    public function getShoppingCart()
    {
        //If the session doesn't have a shopping cart item yet, it shows the cart page with a message stating There are no items in the cart.
        if (!Session::has('cart')) {
            return view('cart.contents', ['products' => null]);
        }
        //Creates a new cart using the Cart Model.
        $cart = new Cart();
        //Calculates the total price of all the items combined.
        $totalprice = $cart->getTotalPrice();
        //Returns the cart view with the products and total price.
        return view('cart.contents', ['products' => $cart->items, 'totalPrice' => $totalprice]);
    }

    /**
     * Change the item amount of a product in the shopping cart.
     *
     * @param Request $request
     * @param [int] $id
     * @return mixed
     */
    public function changeItemAmount(Request $request, $id)
    {
        //Gets the value that the user entered for the quantity.
        $itemQuantity = $request->get('quantityInput');
        //Creates a new cart using the Cart Model.
        $cart = new Cart();
        //Changes the quantity of that product by the itemQuantity.
        $cart->changeQuantity($itemQuantity, $id);
        //Goes back to the cart view.
        return back();
    }

    /**
     * Deletes a item from the shopping cart.
     *
     * @param [int] $id
     * @return void
     */
    public function deleteItem($id)
    {
        //Creates a new cart using the Cart Model.
        $cart = new Cart();
        //Executes the deleteItem function in the Cart Model
        $cart->deleteItem($id);
        //Redirects to the previous page.
        return back();
    }
}
