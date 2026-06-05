<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with(['category', 'brand'])->get();
        $categories = \App\Models\Category::all();
        $brands = \App\Models\Brand::all();
        return view('product', compact('products', 'categories', 'brands'));
    }
}
