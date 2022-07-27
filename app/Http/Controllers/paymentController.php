<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class paymentController extends Controller
{
    public function index(Request $request)
    {
          return view('page.payment');
    }
}
