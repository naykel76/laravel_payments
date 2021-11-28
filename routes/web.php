<?php

use App\Models\PaymentPlatform;
use App\Http\Controllers\PaymentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
*/


Route::get('/', function () {

    $paymentPlatforms = PaymentPlatform::all();

    return view('pages.home')->with([
        'paymentPlatforms' => $paymentPlatforms,
    ]);
})->name('home');

Route::get('/user/dashboard', function () {
    return view('user/dashboard');
})->middleware(['auth'])->name('user.dashboard');


Route::post('/payments/pay', [PaymentController::class, 'pay'])->name('pay');
Route::get('/payments/approval', [PaymentController::class, 'approval'])->name('approval');
Route::get('/payments/cancelled', [PaymentController::class, 'cancelled'])->name('cancelled');

Route::prefix('subscribe')->name('subscribe.')->group(function () {
    Route::get('/', 'SubscriptionController@show')
        ->name('show');

    Route::post('/', 'SubscriptionController@store')
        ->name('store');

    Route::get('/approval', 'SubscriptionController@approval')
        ->name('approval');

    Route::get('/cancelled', 'SubscriptionController@cancelled')
        ->name('cancelled');
});

