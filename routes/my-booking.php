<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
|  MyBooking Routes
|--------------------------------------------------------------------------
|
| Here is where you can register myBooking routes. All
| manage routes will be written to manage entity with associations
|
| Entity Name       :  MyBooking
| Group Prefix      :  my-bookings
| Entity Parameter  :  myBooking
| Route Name Prefix :  my-booking
|
*/


//////////////////////////////////////////////////////////////////////////////
// routes for guests or end users
//////////////////////////////////////////////////////////////////////////////
Route::prefix('my-bookings')->group(function () {
    Route::middleware('guest')->group(function () {
        //Next-Slot-Consume
});
});


//////////////////////////////////////////////////////////////////////////////
// routes for managers
//////////////////////////////////////////////////////////////////////////////
Route::prefix('manage/my-bookings')->group(function () {
    Route::middleware('auth')->group(function () {
        Route::get('my-booking-cards/{service?}', \App\Http\Livewire\MyBooking\Manage\MyBookingCards::class)->name('my-booking.manage.my-booking-cards');
        //Next-Slot-Manage
});
});
