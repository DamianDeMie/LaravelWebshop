<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Products;
use App\Categories;

class CategoriesController extends Controller
{
    public function getProducts()
    {
        $products = Products::all();
        $categories = Categories::all();
        return view('categories.index', ['products' => $products, 'categories' => $categories]);
    }
}
