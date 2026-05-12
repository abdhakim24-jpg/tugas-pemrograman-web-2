<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->search;

        $categories = Category::query()
            ->when($search, function ($query) use ($search) {

                $query->where('name', 'like', '%' . $search . '%')
                      ->orWhere('code', 'like', '%' . $search . '%');
            })
            ->paginate(5);

        return view('categories.index', compact('categories'));
    }
    public function create()
{
    return view('categories.create');
}
public function edit(Category $category)
{
    return view('categories.edit', compact('category'));
}

public function store(Request $request)
{
    Category::create($request->all());

    return redirect()->route('categories.index');
}
}