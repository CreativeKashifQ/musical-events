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
         Route::get('index', \App\Http\Livewire\Booking\Manage\index::class)->name('booking.manage.index');
        Route::get('detail', \App\Http\Livewire\Booking\Manage\detail::class)->name('booking.manage.detail');
        //Next-Slot-Manage    
});
});