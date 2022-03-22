<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
|  Booking Routes
|--------------------------------------------------------------------------
|
| Here is where you can register booking routes. All
| manage routes will be written to manage entity with associations
|
| Entity Name       :  Booking
| Group Prefix      :  bookings
| Entity Parameter  :  booking
| Route Name Prefix :  booking
|
*/


//////////////////////////////////////////////////////////////////////////////
// routes for guests or end users
//////////////////////////////////////////////////////////////////////////////
Route::prefix('bookings')->group(function () {
    Route::middleware('guest')->group(function () {
        //Next-Slot-Consume    
});
});


//////////////////////////////////////////////////////////////////////////////
// routes for managers
//////////////////////////////////////////////////////////////////////////////
Route::prefix('manage/bookings')->group(function () {
    Route::middleware('auth')->group(function () {
         Route::get('index/{service?}', \App\Http\Livewire\Booking\Manage\Index::class)->name('booking.manage.index');
        Route::get('booking-card/{serviceType}/{serviceId}', \App\Http\Livewire\Booking\Manage\BookingCard::class)->name('booking.manage.booking-card');
        //Next-Slot-Manage    
});
});