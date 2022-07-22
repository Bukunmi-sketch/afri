<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
//use App\Repositories\ProductRepository;

class AllproductController extends Controller
{
    protected $products;

    public function __construct(){
        $this->middleware('auth');

     //   $this->products=$products;
    }

    public function index(Request $request){
         //$list=Product::get();
        $list=DB::table('products')->get();
        return view("products.items", ['list'=> $list ] ) ;
    }
}
