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
            "product_name"=>"required|max:255|string",
            "product_description"=>"required|max:255|string",
            "product_price"=>"required|max:255|integer",
            "product_imagea"=>"required|max:255|integer",
            "product_imageb"=>"required|max:255|integer",
        ]);

        Product::create([

        ]);
    }

}
