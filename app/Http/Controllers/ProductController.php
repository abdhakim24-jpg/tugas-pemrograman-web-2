<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->search;

        $category = $request->category;

        $products = Product::with('category')

            ->when($search, function ($query) use ($search) {

                $query->where('name', 'like', '%' . $search . '%')

                      ->orWhere('brand', 'like', '%' . $search . '%');
            })

            ->when($category, function ($query) use ($category) {

                $query->where('category_id', $category);
            })

            ->paginate(5);

        $categories = Category::all();

        return view('products.index', compact(
            'products',
            'categories'
        ));
    }

    public function create()
    {
        $categories = Category::all();

        return view('products.create', compact('categories'));
    }

    public function store(Request $request)
    {
        Product::create($request->all());

        return redirect()->route('products.index');
    }

    public function edit(Product $product)
    {
        $categories = Category::all();

        return view('products.edit', compact(
            'product',
            'categories'
        ));
    }

    public function update(Request $request, Product $product)
    {
        $product->update($request->all());

        return redirect()->route('products.index');
    }
}