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
        return view('products.index', [
            'products' => Product::orderBy('created_at')->paginate(3)
        ]);
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(SaveProductRequest $request)
    {
        $imagePath = $request->file('images')->store('images', 'public');   ///// NEW IMAGES ----- ///////

        $product =  Product::create($request->validated());

        return redirect()->route('products.show', $product)
            ->with('status', 'Product created');
    }

    public function show(Product $product)
    {

        return view('products.show', compact('product'));
    }
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    public function update(SaveProductRequest $request, Product $product)
    {


        $product->update($request->validated());
        return redirect()->route('products.show', $product)
            ->with('status', 'Product updated');

        if ($request->hasFile('image')) {    //////-----IMAGES
            try {
                $imagePath = $request->file('image')->store('images', 'public');
                $validatedData['image'] = $imagePath;
            } catch (\Exception $e) {
                return back()->withErrors(['image' => 'Failed to upload image. Please try again.']);
            }
        }   //////-------end IMAGES
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index')
            ->with('status', 'Product deleted');
    }
}
