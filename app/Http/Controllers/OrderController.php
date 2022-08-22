<?php

namespace App\Http\Controllers;
use App\Models\Order;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class OrderController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request){
        //$list=Order::get();
       $order=DB::table('orders')->get();
       return view("products.order", ['order'=> $order ] ) ;
    }

    public function destroy(Request $request, Order $order){
        $this->authorize('destroy', $order);
        $order->delete();

        return redirect('/orders');
}
}
