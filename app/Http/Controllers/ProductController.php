<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        return view('products.create');
    }

    public function store(Request $request){
       // $validated=$request->validate([]);
       //dd($request->user()->products());
        $this->validate($request, [
            "product_name"=>"required|max:255|string",
            "product_description"=>"required|max:255|string",
            "product_price"=>"required|integer",
            "product_available"=>"required|integer",
        ]);

        
        //Product::create([]);
        $request->user()->products()->create([
            'product_name'=>$request->product_name,
            'description'=>$request->product_description,
            'price'=>$request->product_price,
            'available'=>$request->product_available
        ]);

        return redirect('/dashboard');
    }

}
