<?php

namespace App\Http\Controllers;

use App\Models\ProductItem;
use Illuminate\Http\Request;

use App\Models\Product;

class AdminController extends Controller
{
    // Display all products
    public function index() {
        $products = Product::all(); // Fetch all products
        return view('admin.products.index', compact('products'));
    }

    // Show the form to create a new product
    public function create() {
        return view('admin.products.create');
    }

    // Store a new product
    public function store(Request $request) {
        $request->validate([
            'product_name' => 'required',
            'price' => 'required|numeric',
            'brand' => 'required',
            'picture' => 'required|url',
        ]);

        Product::create($request->all());
        return redirect('/admin/products');
    }

    // Show the form to edit a product
    public function edit($id) {
        $product = Product::findOrFail($id);
        return view('admin.products.edit', compact('product'));
    }

    // Update product data
    public function update(Request $request, $id) {
        $request->validate([
            'product_name' => 'required',
            'price' => 'required|numeric',
            'brand' => 'required',
            'picture' => 'required|url',
        ]);

        $product = Product::findOrFail($id);
        $product->update($request->all());
        return redirect('/admin/products');
    }

    // Delete a product
    public function destroy($id) {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect('/admin/products');
    }
}
