<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', ['products' => $products]); //as index file is inside the products folder so it is written in this format.
    }
    public function create()
    {
        return view('products.create');
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required|decimal:0,2',
            'description' => 'nullable'
        ]);

        $newProduct = Product::create($data);
        return redirect(route('product.index'));
    }
    public function edit(Product $product)
    {
        dd($product);
    }
}
