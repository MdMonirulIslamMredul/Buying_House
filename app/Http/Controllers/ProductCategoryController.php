<?php

namespace App\Http\Controllers;

use App\Models\ProductCategory;
use Illuminate\Http\Request;

class ProductCategoryController extends Controller
{
    public function add_categories()
    {
        return view('admin.category.category', [
            'categories' => ProductCategory::latest()->get(),
        ]);
    }

    public function store_categories(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        ProductCategory::create([
            'name' => $request->name,
            'slug' => $request->slug ?? null,
            'status' => $request->status ? 1 : 0,
        ]);

        return back()->with('message', 'Category added successfully');
    }

    public function edit_categories($id)
    {
        return view('admin.category.edit_category', [
            'category' => ProductCategory::findOrFail($id),
        ]);
    }

    public function update_categories(Request $request)
    {
        $request->validate([
            'id' => 'required|exists:product_categories,id',
            'name' => 'required|string|max:255',
        ]);

        $cat = ProductCategory::findOrFail($request->id);
        $cat->name = $request->name;
        $cat->slug = $request->slug ?? $cat->slug;
        $cat->status = $request->status ? 1 : 0;
        $cat->save();

        return back()->with('message', 'Category updated successfully');
    }
}
