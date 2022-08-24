<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\DB;

class ViewOrderController extends Controller
{

    public function allOrders(Request $request){
        //$list=Order::get();
       $order=DB::table('orders')->get();
      // return response()->json($order);
        return $order;
    }


    public function userOrder($orderid){
        //$list=Order::get();
       $order=DB::table('orders')->where('order_id',$orderid)->get();
     //  return response()->json($order);
       return json_decode($order);
    }
}
