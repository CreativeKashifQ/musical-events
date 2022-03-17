<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
|  Offer Routes
|--------------------------------------------------------------------------
|
| Here is where you can register offer routes. All
| manage routes will be written to manage entity with associations
|
| Entity Name       :  Offer
| Group Prefix      :  offers
| Entity Parameter  :  offer
| Route Name Prefix :  offer
|
*/


//////////////////////////////////////////////////////////////////////////////
// routes for guests or end users
//////////////////////////////////////////////////////////////////////////////
Route::prefix('offers')->group(function () {
    Route::middleware('guest')->group(function () {
        //Next-Slot-Consume
});
});


//////////////////////////////////////////////////////////////////////////////
// routes for managers
//////////////////////////////////////////////////////////////////////////////
Route::prefix('manage/offers')->group(function () {
    Route::middleware('auth')->group(function () {
        Route::get('index/{service_type?}', \App\Http\Livewire\Offer\Manage\Index::class)->name('offer.manage.index');
        Route::get('offer-card/{offer}', \App\Http\Livewire\Offer\Manage\OfferCard::class)->name('offer.manage.offer-card');
        Route::get('offercard', \App\Http\Livewire\Offer\Manage\Offercard::class)->name('offer.manage.offercard');
        //Next-Slot-Manage
});
});
