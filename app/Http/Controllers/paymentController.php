<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class paymentController extends Controller
{

    protected $namee;
    public function store(Request $request)
    {
         $request->name;
         $request->price;
       $this->namee=$request->name;
     //    return redirect()->route('pay');
    // redirect('/pay')->with('name', $request->name );
     // return redirect()->action([App\Http\Controllers\PaymentController::class, 'index']);
     return response()->json([
             'status'=>200,
             'name'=> $request->name,
             'price'=>  $request->price
         ]);
    
    }

    public function index(Request $request)
    {
          return view('page.payment');

    }

   
}
