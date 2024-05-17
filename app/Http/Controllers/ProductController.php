<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ProductController extends Controller
{
    public function index()
    {
        $products = DB::table('products')->get(); // Fetch products using query builder
        return view('dashboard', ['products' => $products]);
    }
    public function edit($id)
    {
        $product = Product::findOrFail($id);

        return view('admin.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        // Validate and update the product attributes based on your form fields
        $request->validate([
            'item_name' => 'required|string|max:255',
            'item_price' => 'nullable|string',
            'item_picture' => 'required|string',
            // Add other validation rules as needed
        ]);

        $product->update($request->all());

        return redirect('/dashboard')->with('success', 'Product updated successfully');
    }

}
