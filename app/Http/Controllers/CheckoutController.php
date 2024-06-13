<?php

namespace App\Http\Controllers;

use Midtrans\Snap;
use Midtrans\Config;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function showCheckout(Request $request)
    {
        // dd('test');

        // Validate the request data
        $request->validate([
            'product_name' => 'required|string',
            'product_price' => 'required|integer',
            'quantity' => 'required|integer|min:1',
        ]);

        // Set Midtrans configuration
        Config::$serverKey = config('midtrans.server_key');
        Config::$isProduction = config('midtrans.is_production');
        Config::$isSanitized = true;
        Config::$is3ds = true;

        // Get product details from the request
        $productName = $request->input('product_name');
        $productPrice = $request->input('product_price');
        $quantity = $request->input('quantity');
        $totalPrice = $productPrice * $quantity;

        // Create transaction details
        $transactionDetails = [
            'order_id' => uniqid(),
            'gross_amount' => $totalPrice // Example amount
        ];

        // Create customer details
        $customerDetails = [
            'first_name' => 'Habib',
            'last_name' => 'Ryzen',
            'email' => 'ryzen@example.com',
            'phone' => '08111222333',
        ];

        // // Create transaction details
        // $transactionDetails = [
        //     'order_id' => uniqid(),
        //     'gross_amount' => $productPrice, // Price from the request
        // ];

        // Create parameter for Snap API
        $params = [
            'transaction_details' => $transactionDetails,
            'customer_details' => $customerDetails,
        ];

        // Get Snap token
        $snapToken = Snap::getSnapToken($params);
        $snapToken = \Midtrans\Snap::getSnapToken($params);
        // $transactionDetails->snap_token = $snapToken;

        return view('checkout', [
            'snap_token' => $snapToken,
            'product_name' => $productName,
            'product_price' => $productPrice,
            'quantity' => $quantity,
            'total_price' => $totalPrice
        ]);

        // Debugging: ensure $snapToken is not null
        if (is_null($snapToken)) {
            abort(500, 'Snap token could not be generated.');
        }

        // Periksa apakah pengguna telah login
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Anda harus login untuk melanjutkan pembelian.');
        }

        return view('checkout', ['snap_token' => $snapToken]);
    }
}
