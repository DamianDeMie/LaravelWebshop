<?php

namespace App;

use Session;

class Cart
{
    //When a cart gets created, these properties will be automatically set as a default.
    public $items = Null;
    public $totalQuantity = 0;
    public $totalPrice = 0;

    /**
     * Constructor that is used when a old Shopping Cart exists, if so adds all the data from the old shopping cart into the new one.
     *
     * @param [mixed] $oldCart
     */
    public function __construct()
    {
        //Checks if the session already has a cart or not, if so it gets the data from that old cart so you don't lose anything.
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        if ($oldCart) {
            $this->items = $oldCart->items;
            $this->totalQuantity = $oldCart->totalQuantity;
            $this->totalPrice = $oldCart->totalPrice;
        }
    }

    /**
     * Adds a item to the Shopping Cart
     *
     * @param [mixed] $item
     * @param [int] $id
     * @return mixed
     */
    public function addItem($item, $id)
    {
        //Creates a array for the item, containing the item itself, the quantity and the price.
        $storedItem = ['quantity' => 0, 'price' => $item->product_price, 'item' => $item];
        //If the item already exists in the shopping cart, it will be overwrite the previous array, so that the data will be correct.
        if ($this->items) {
            if (array_key_exists($id, $this->items)) {
                $storedItem = $this->items[$id];
            }
        }
        //Increases the quantity of the product in the shopping cart.
        $storedItem['quantity']++;
        //Stores the price for the product, this is multiplied by the quantity so for example if you add 5 items you get the price multiplied by 5.
        $storedItem['price'] = $item->product_price * $storedItem['quantity'];

        //Stores the item that has been added to the StoredItem variable and then puts that in the cart session.
        $this->items[$id] = $storedItem;

        Session::put('cart', $this);
    }

    /**
     * Get total price of every product that is currently in the shopping cart.
     *
     * @return int
     */
    public function getTotalPrice()
    {
        //Sets the variable for TotalPrice to 0, so there won't be any miscalculations.
        $totalPrice = 0;
        foreach ($this->items as $product) {
            $totalPrice += $product['price'];
        }
        return $totalPrice;
    }

    /**
     * Changes the quantity of a item in the cart.
     *
     * @param [int] $itemQuantity
     * @param [int] $id
     * @return int
     */
    public function changeQuantity($itemQuantity, $id)
    {
        //If the item quantity is set to zero, it will delete the item from the shopping cart entirely.
        if ($itemQuantity == 0) {
            $this->deleteItem($id);
            return;
        }
        //Calculations to make sure the price is set accurately.
        if ($this->items[$id]['quantity'] == 0) {
            $this->items[$id]['price'] = $itemQuantity * $this->items[$id]['price'];
        } else {
            $this->items[$id]['price'] = $itemQuantity * ($this->items[$id]['price'] / $this->items[$id]['quantity']);
        }
        //Changes the item quantity in the array to what the user entered.
        $this->items[$id]['quantity'] = $itemQuantity;

        //Puts the new quantity in the cart.
        Session::put('cart', $this);
    }

    /**
     * Deletes a item from the shopping cart.
     *
     * @param [int] $id
     * @return void
     */
    public function deleteItem($id)
    {
        //Deletes the item from the cart, if the cart is completely empty of items, it forgets the Cart session so you get the "Empty cart" screen.
        unset($this->items[$id]);
        if (empty($this->items)) {
            Session::forget("cart");
            return;
        }
        Session::put('cart', $this);
    }

    /**
     * Deletes the shopping Cart.
     *
     * @return void
     */
    public function deleteCart()
    {
        //Forgest the Cart Session.
        Session::forget('cart');
    }
}
