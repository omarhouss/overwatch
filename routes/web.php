<?php

use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('boostpages.index');
});
Route::get('/boost1', function () {
    return view('boostpages.boost1');
});
Route::get('/boost2', function () {
    return view('boostpages.boost2');
});
Route::get('/boost3', function () {
    return view('boostpages.boost3');
});
Route::get('/boost4', function () {
    return view('boostpages.boost4');
});
Route::get('/sellix_thank_you', function () {
    return view('boostpages.sellix_thank_you');
});

use App\Http\Controllers\RankPricingController;

Route::post('/orders', [RankPricingController::class, 'storeOrder']);
Route::post('/order', [RankPricingController::class, 'storeOrder2']);
Route::post('/order4', [RankPricingController::class, 'storeOrder3']);
Route::get('/orderdetails/{id}',[RankPricingController::class, 'orderdetail']);

Route::post('/payments', [RankPricingController::class, 'payments'])->name('payments.request');

Route::get('/sellix_webhook_response', [RankPricingController::class, 'sellix_webhook_response']);
Route::get('/dashboard', [RankPricingController::class, 'index']);
Route::get('/orders2', [RankPricingController::class, 'index2']);

use App\Http\Controllers\PaymentController;

Route::get('/payment', [PaymentController::class, 'createPayment'])->name('create-payment');