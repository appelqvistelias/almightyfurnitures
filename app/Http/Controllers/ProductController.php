<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Ramsey\Uuid\Type\Decimal;
use App\Http\Requests\SaveProductRequest;


class ProductController extends Controller
{
    public function index()
    {
        return view('admin.products.index', [
            'products' => Product::orderBy('created_at')->paginate(3)
        ]);
    }

    public function create()
    {
        return view('admin.products.create');
    }

    public function store(SaveProductRequest $request)
    {

        $product =  Product::create($request->validated());

        return redirect()->route('admin.products.show', $product)
            ->with('status', 'Product created');
    }

    public function show(Product $product)
    {

        return view('admin.products.show', compact('product'));
    }

    public function edit(Product $product)
    {
        return view('admin.products.edit', compact('product'));
    }

    public function update(SaveProductRequest $request, Product $product)
    {
        $product->update($request->validated());
        return redirect()->route('admin.products.show', $product)
            ->with('status', 'Product updated');
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('admin.products.index')
            ->with('status', 'Product deleted');
    }
}
