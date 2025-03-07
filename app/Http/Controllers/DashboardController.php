<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class DashboardController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('created_at')->paginate(10);

        return view('admin.products.index', compact('products'));
    }
}
