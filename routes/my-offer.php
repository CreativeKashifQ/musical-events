<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
|  MyOffer Routes
|--------------------------------------------------------------------------
|
| Here is where you can register myOffer routes. All
| manage routes will be written to manage entity with associations
|
| Entity Name       :  MyOffer
| Group Prefix      :  my-offers
| Entity Parameter  :  myOffer
| Route Name Prefix :  my-offer
|
*/


//////////////////////////////////////////////////////////////////////////////
// routes for guests or end users
//////////////////////////////////////////////////////////////////////////////
Route::prefix('my-offers')->group(function () {
    Route::middleware('guest')->group(function () {
        //Next-Slot-Consume
});
});


//////////////////////////////////////////////////////////////////////////////
// routes for managers
//////////////////////////////////////////////////////////////////////////////
Route::prefix('manage/my-offers')->group(function () {
    Route::middleware('auth')->group(function () {
         Route::get('sent-offer/{service?}', \App\Http\Livewire\MyOffer\Manage\SentOffer::class)->name('my-offer.manage.sent-offer');
        //Next-Slot-Manage
});
});
