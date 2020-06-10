<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Products;
use App\Categories;

use DB;

class CategoriesController extends Controller
{
    public function getProducts($id)
    {
        $products = DB::table('products')->get()->where('category_id', $id);
        $products = Products::get()->where('category_id', $id);
        $categories = Categories::all();
        return view('categories.index', ['products' => $products, 'categories' => $categories]);
    }
}
