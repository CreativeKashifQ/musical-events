<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
|  SendOffer Routes
|--------------------------------------------------------------------------
|
| Here is where you can register sendOffer routes. All
| manage routes will be written to manage entity with associations
|
| Entity Name       :  SendOffer
| Group Prefix      :  send-offers
| Entity Parameter  :  sendOffer
| Route Name Prefix :  send-offer
|
*/


//////////////////////////////////////////////////////////////////////////////
// routes for guests or end users
//////////////////////////////////////////////////////////////////////////////
Route::prefix('send-offers')->group(function () {
    Route::middleware('guest')->group(function () {
        //Next-Slot-Consume
});
});


//////////////////////////////////////////////////////////////////////////////
// routes for managers
//////////////////////////////////////////////////////////////////////////////
Route::prefix('manage/send-offers')->group(function () {
    Route::middleware('auth')->group(function () {
         Route::get('offer-form/{serviceType}/{serviceId}', \App\Http\Livewire\SendOffer\Manage\OfferForm::class)->name('send-offer.manage.offer-form');
        //Next-Slot-Manage
});
});
