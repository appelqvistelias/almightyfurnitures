<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('created_at')->paginate(4);
        return view('home', compact('products'));
    }

    public function showProductDetails($id)
    {
        $product = Product::findOrFail($id);
        return view('product-details', compact('product'));
    }
}
