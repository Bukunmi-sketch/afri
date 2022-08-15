<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\DB;

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
            "category"=>"required|string",
            "product_available"=>"required|string",
        ]);

        //Product::create([]);
        $request->user()->products()->create([
            'product_name'=>$request->product_name,
            'description'=>$request->product_description,
            'price'=>$request->product_price,
            'category'=>$request->category,
            'available'=>$request->product_available,
        ]);

        //->back()->with('status','created a product succesfully');
        return redirect()->route('products');
    }

    public function getproducts(Request $request){
        //$list=Product::get();
       $list=DB::table('products')->get();
       //dd($list);
     //  return response()->json([$list]);
       return view("products.items", ['list'=> $list ] ) ;
    }

    public function destroy(Request $request, Product $product){
            $this->authorize('destroy', $product);
            $product->delete();

            return redirect('/products');
    }

}
