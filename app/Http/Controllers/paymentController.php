<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Order;
use Illuminate\Http\Request;

class paymentController extends Controller
{
     public function index(Request $request)
     {
           return view('page.payment');

     }

      /*
     public function verify(Request $request)
     {
         $transactionid= $request->transaction_id;

           $flw = new \Flutterwave\Rave(getenv('FLW_SECRET_KEY')); // Set `PUBLIC_KEY` as an environment variable
           $transactions = new \Flutterwave\Transactions();
           $response = $transactions->verifyTransaction(['id' => $transactionId]);
           if (
               $response['data']['status'] === "successful"
               && $response['data']['amount'] === $expectedAmount
               && $response['data']['currency'] === $expectedCurrency) {
               // Success! Confirm the customer's payment
           } else {
               // Inform the customer their payment was unsuccessful
           }

     }

     */

     public function verify(Request $request){

         $transactionid= $request->transaction_id;

      $curl = curl_init();

			curl_setopt_array($curl, array(
			CURLOPT_URL => "https://api.flutterwave.com/v3/transactions/{$transactionid}/verify", // Pass transaction ID for validation
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => "",
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "GET",
			CURLOPT_HTTPHEADER => array(
			"Content-Type: application/json",
			'Authorization: Bearer {SECRETE_KEY}', //Get your Secrete key from flutterwave dashboard.
			),
			));

			$response = curl_exec($curl);

			curl_close($curl);

			// echo  '<pre>';
			// echo $response;
			// echo '</pre>';

			$res = json_decode($response);
            return $res;

     }

      


    public function store(Request $request)
    {

        $request->orderid=2+rand(0,time());
     //   return response()->json([
         Order::create([
            "order_id" =>$request->orderid,
            'amount'=>  $request->amount,
            'customers_name'=> $request->customers_name,
            'email' => $request->customers_email,
            'customers_address' => $request->customers_address,
            "state" => $request->state,
            "cart_items" => $request->product,
            "phone_no" =>  $request->phone,
            'additional_info' => $request->moreInfo,
            'payment_status' => $request->payment_status,
            'order_status' => $request->order_status,
            'payment_type' => "",
            'transaction_ref' => ""
         ]);


         return response()->json(["status"=>200, "orderid"=>$request->orderid]);
        //insert the data to the database
        //if successfully inserted return status== 200 & set payment status to pending
        //if status == 200 in reactjs direct to payment link with flutterwave or buynow paylater  (show them their payment id and transaction id and other details now they can pay in flutterwave)
        //if flutterwave does it things
        //verify their payment
       //show them successfully payment link


    }

     public function test(Request $request){
           return response()->json(["status"=>200, "orderid"=>$request->orderid]);
     }


}
