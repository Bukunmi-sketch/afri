<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            "name"=>"required|max:255|string",
            "stask"=>"required|max:255|string",
        ]);

        Product::create([

        ]);
    }

}
