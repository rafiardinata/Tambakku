<?php

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OngkirController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\Api\UpdateController;

Route::get('/', function () {
    // $respons=Http::get('http://localhost/user_management_api/api/user.php');
    // dd($respons->json(

    // ));
    return view('welcome');
})->name('welcome');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/signup', function () {
    return view('signup');
})->name('signup');

Route::get('/product', function () {
    return view('product');
})->name('product');

Route::get('/checkout', function () {
    return view('checkout');
})->name('checkout');

// Route::get('/update', 'AccountController');
// Route::post('/update', 'AccountController')->name('update');
Route::get('/update', [AccountController::class, 'showUpdate'])->name('update');
Route::post('/update', [AccountController::class, 'update'])->name('update');

Route::get('/ongkir', [OngkirController::class, 'showOngkir'])->name('ongkir');
Route::post('/ongkir', [OngkirController::class, 'cekOngkir'])->name('ongkir');

Route::post('/checkout', [CheckoutController::class, 'showCheckout'])->name('checkout.show');

Route::get('/signup', [AuthController::class, 'signup'])->name('signup');
Route::post('/signup', [AuthController::class, 'signupPost'])->name('signup');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginPost'])->name('login');

Route::get('/welcome', [HomeController::class, 'index']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');