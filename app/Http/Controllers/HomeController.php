<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Spatie\QueryBuilder\QueryBuilder;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::all();

        $products = QueryBuilder::for(Product::class)
            ->with('category')
            ->when($request->category, function ($query, $category) {
                return $query->where('category_id', $category);
            })
            ->orderBy('created_at')
            ->paginate(4);

        return view('home', compact('products', 'categories'));
    }

    public function showProductDetails($id)
    {
        $product = Product::findOrFail($id);
        return view('product-details', compact('product'));
    }
}
