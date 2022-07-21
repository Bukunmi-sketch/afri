<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AllproductController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request){
        $list=['macbook','semo','eba','wheat'];
        $fuck='let" enjoy ourselves';
        return view("products.items", compact('list', 'fuck'));
      //  ['itemname'=> $list ]);
    }
}
