<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Categories;
use DB;

class ProductsController extends Controller
{
    public function showProduct($id)
    {
        $product = DB::table('products')->where('id', $id)->first();
        $categories = Categories::all();
        return view('products.details', ['product' => $product, 'categories' => $categories]);
    }
}
