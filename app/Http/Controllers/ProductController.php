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
            "product_imagea"=>"max:255|integer",
            "product_available"=>"max:255|integer",
        ]);

        $request->user()->products()->create([
            'product_name'=>$request->product_name,
            'description'=>$request->product_description,
            'price'=>$request->product_price,
            'product_picture'=>$request->product_imagea,
            'available'=>$request->product_available,
        ]);
    }

}
