<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Repositories\ProductRepository;

class AllproductController extends Controller
{
    protected $products;

    public function __construct(ProductRepository $products){
        $this->middleware('auth');

        $this->products=$products;
    }

    public function index(Request $request){
       // $list=['macbook','semo','eba','wheat']; $fuck='let" enjoy ourselves';
        //$list=Product::get();
       // $list=DB::table('products')->get();
        return view("products.items", ['list'=> $this->products->forUser($request->user()) ]) ;
      // compact('list', 'fuck')
    }
}
