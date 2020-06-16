<?php

namespace App\Http\Controllers;

use App\Products;
use App\Categories;

class CategoriesController extends Controller
{
    /**
     * Gets all the products from a category.
     *
     * @param [type] $id
     * @return void
     */
    public function getProducts($id)
    {
        //Gets all the products that have the same category id using Eloquent.
        $products = Products::get()->where('category_id', $id);
        //Gets all categories for the sideview menu.
        $categories = Categories::all();
        //Returns the view with the two variables.
        return view('categories.index', ['products' => $products, 'categories' => $categories]);
    }
}
