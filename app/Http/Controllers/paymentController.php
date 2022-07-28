<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class paymentController extends Controller
{
    public function index(Request $request)
    {
         $request->name;
         $request->price;
     /*    return response()->json([
             'status'=>200
         ]);*/
          return view('page.payment');

    }

    public function store(Request $request)
    {
         $request->name;
         $request->price;
        return response()->json([
             'status'=>200,
             'name'=> $request->name,
             'price'=>  $request->price
         ]);
        

    }
}
