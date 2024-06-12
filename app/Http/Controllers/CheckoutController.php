<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Midtrans\Config;
use Midtrans\Snap;

class CheckoutController extends Controller
{
    public function showCheckout()
    {
        // dd('test');
        // Set Midtrans configuration
        Config::$serverKey = config('midtrans.server_key');
        Config::$isProduction = config('midtrans.is_production');
        Config::$isSanitized = true;
        Config::$is3ds = true;

        // Create transaction details
        $transactionDetails = [
            'order_id' => uniqid(),
            'gross_amount' => 1000, // Example amount
        ];

        // Create customer details
        $customerDetails = [
            'first_name' => 'Habib',
            'last_name' => 'Ryzen',
            'email' => 'ryzen@example.com',
            'phone' => '08111222333',
        ];

        // Create parameter for Snap API
        $params = [
            'transaction_details' => $transactionDetails,
            'customer_details' => $customerDetails,
        ];

        // Get Snap token
        $snapToken = Snap::getSnapToken($params);
        $snapToken = \Midtrans\Snap::getSnapToken($params);
        // $transactionDetails->snap_token = $snapToken;



        // Debugging: ensure $snapToken is not null
        if (is_null($snapToken)) {
            abort(500, 'Snap token could not be generated.');
        }

        return view('checkout', ['snap_token' => $snapToken]);
    }
}
