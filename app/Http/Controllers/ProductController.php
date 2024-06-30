<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('products.index'); //as index file is inside the products folder so it is written in this format.
    }
    public function create()
    {
        return view('products.create');
    }
}
