<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class OrderController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request){
        //$list=Product::get();
       $list=DB::table('orders')->get();

       return view("products.items", ['list'=> $list ] ) ;
    }
}
