<?php

namespace App;

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
    public function __construct($oldCart)
    {
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
        $storedItem['quantity']++;
        $storedItem['price'] = $item->product_price * $storedItem['quantity'];
        $this->items[$id] = $storedItem;
        $this->totalQuantity++;
        $this->totalPrice += $item->product_price;
    }
}
