<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
|  Payment Routes
|--------------------------------------------------------------------------
|
| Here is where you can register payment routes. All
| manage routes will be written to manage entity with associations
|
| Entity Name       :  Payment
| Group Prefix      :  payments
| Entity Parameter  :  payment
| Route Name Prefix :  payment
|
*/


//////////////////////////////////////////////////////////////////////////////
// routes for guests or end users
//////////////////////////////////////////////////////////////////////////////
Route::prefix('payments')->group(function () {
    Route::middleware('guest')->group(function () {
        //Next-Slot-Consume
});
});


//////////////////////////////////////////////////////////////////////////////
// routes for managers
//////////////////////////////////////////////////////////////////////////////
Route::prefix('manage/payments')->group(function () {
    Route::middleware('auth')->group(function () {
        Route::get('connect-stripe', \App\Http\Livewire\Payment\Manage\ConnectStripe::class)->name('payment.manage.connect-stripe');
        Route::get('stripe_onboard_success/{success}/{requesteValidator}/{secret}', \App\Http\Livewire\Payment\Manage\StripeOnboardSuccess::class)->name('payment.manage.stripe_onboard_success');
        Route::get('stripe_onboard_fail/{fail}/{requesteValidator}/{secret}', \App\Http\Livewire\Payment\Manage\StripeOnboardFail::class)->name('payment.manage.stripe_onboard_fail');
        Route::get('payable-service-card/{service?}/{offer}', \App\Http\Livewire\Payment\Manage\PayableServiceCard::class)->name('payment.manage.payable-service-card');
        Route::get('user-detail/{offer}', \App\Http\Livewire\Payment\Manage\UserDetail::class)->name('payment.manage.user-detail');
        Route::get('payment-method/{offer}', \App\Http\Livewire\Payment\Manage\PaymentMethod::class)->name('payment.manage.payment-method');
        //Next-Slot-Manage
});
});
