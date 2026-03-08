<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function products()
    {
        return view('admin.product.product', [
            'products' => Product::latest()->get(),
            'categories' => ProductCategory::latest()->get(),
            'subcategories' => SubCategory::latest()->get(),
        ]);
    }

    public function store_products(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'required|image',
        ]);

        $path = null;
        if ($request->file('image')) {
            $file = $request->file('image');
            $name = 'product_' . time() . '_' . rand() . '.' . $file->getClientOriginalExtension();
            $dir = 'products/';
            if (!is_dir(public_path($dir))) {
                mkdir(public_path($dir), 0755, true);
            }
            $file->move(public_path($dir), $name);
            $path = $dir . $name;
        }

        Product::create([
            'product_category_id' => $request->product_category_id,
            'subcategory_id' => $request->subcategory_id,
            'name' => $request->name,
            'slug' => $request->slug ?? null,
            'image' => $path,
            'description' => $request->description ?? null,
            'price' => $request->price ?? 0,
            'sku' => $request->sku ?? null,
            'stock' => $request->stock ?? 0,
            'size' => $request->size ?? null,
            'color' => $request->color ?? null,
            'material' => $request->material ?? null,
            'gender' => $request->gender ?? null,
            'status' => $request->status ? 1 : 0,
        ]);

        return back()->with('message', 'Product added successfully');
    }

    public function edit_products($id)
    {
        return view('admin.product.edit_product', [
            'product' => Product::findOrFail($id),
            'categories' => ProductCategory::latest()->get(),
            'subcategories' => SubCategory::latest()->get(),
        ]);
    }

    // Show add product form
    public function show_add_form()
    {
        return view('admin.product.add-products', [
            'categories' => ProductCategory::latest()->get(),
            'subcategories' => SubCategory::latest()->get(),
        ]);
    }

    // Admin products listing (for route /products)
    // public function products()
    // {
    //     return view('admin.product.product', [
    //         'products' => Product::latest()->get(),
    //         'categories' => ProductCategory::latest()->get(),
    //         'subcategories' => SubCategory::latest()->get(),
    //     ]);
    // }

    public function update_products(Request $request)
    {
        $request->validate([
            'id' => 'required|exists:products,id',
            'name' => 'required|string|max:255',
        ]);

        $product = Product::findOrFail($request->id);
        if ($request->file('image')) {
            if ($product->image && file_exists(public_path($product->image))) {
                unlink(public_path($product->image));
            }
            $file = $request->file('image');
            $name = 'product_' . time() . '_' . rand() . '.' . $file->getClientOriginalExtension();
            $dir = 'products/';
            if (!is_dir(public_path($dir))) {
                mkdir(public_path($dir), 0755, true);
            }
            $file->move(public_path($dir), $name);
            $product->image = $dir . $name;
        }

        $product->product_category_id = $request->product_category_id;
        $product->subcategory_id = $request->subcategory_id;
        $product->name = $request->name;
        $product->slug = $request->slug ?? $product->slug;
        $product->description = $request->description ?? $product->description;
        $product->price = $request->price ?? $product->price;
        $product->sku = $request->sku ?? $product->sku;
        $product->stock = $request->stock ?? $product->stock;
        $product->size = $request->size ?? $product->size;
        $product->color = $request->color ?? $product->color;
        $product->material = $request->material ?? $product->material;
        $product->gender = $request->gender ?? $product->gender;
        $product->status = $request->status ? 1 : 0;
        $product->save();

        return redirect()->route('add.products')->with('message', 'Product updated successfully');
        

    }

    public function delete_products($id)
    {
        $product = Product::findOrFail($id);
        if ($product->image && file_exists(public_path($product->image))) {
            unlink(public_path($product->image));
        }
        $product->delete();
        return redirect()->route('add.products')->with('message', 'Product deleted');
    }
}
