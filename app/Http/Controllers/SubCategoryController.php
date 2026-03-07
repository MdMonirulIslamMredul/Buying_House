<?php

namespace App\Http\Controllers;

use App\Models\SubCategory;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function add_subcategories()
    {
        return view('admin.subcategory.subcategory', [
            'subcategories' => SubCategory::latest()->get(),
            'categories' => ProductCategory::latest()->get(),
        ]);
    }

    public function store_subcategories(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'product_category_id' => 'nullable|exists:product_categories,id',
        ]);

        SubCategory::create([
            'product_category_id' => $request->product_category_id,
            'name' => $request->name,
            'slug' => $request->slug ?? null,
            'status' => $request->status ? 1 : 0,
        ]);

        return back()->with('message', 'Subcategory added successfully');
    }

    public function edit_subcategories($id)
    {
        return view('admin.subcategory.edit_subcategory', [
            'subcategory' => SubCategory::findOrFail($id),
            'categories' => ProductCategory::latest()->get(),
        ]);
    }

    public function update_subcategories(Request $request)
    {
        $request->validate([
            'id' => 'required|exists:subcategories,id',
            'name' => 'required|string|max:255',
        ]);

        $sc = SubCategory::findOrFail($request->id);
        $sc->product_category_id = $request->product_category_id;
        $sc->name = $request->name;
        $sc->slug = $request->slug ?? $sc->slug;
        $sc->status = $request->status ? 1 : 0;
        $sc->save();

        return back()->with('message', 'Subcategory updated successfully');
    }

    public function get_by_category($categoryId)
    {
        $subcategories = SubCategory::where('product_category_id', $categoryId)->where('status', 1)->get();
        return response()->json($subcategories);
    }
}
