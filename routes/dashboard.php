<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
|  Dashboard Routes
|--------------------------------------------------------------------------
|
| Here is where you can register dashboard routes. All
| manage routes will be written to manage entity with associations
|
| Entity Name       :  Dashboard
| Group Prefix      :  dashboards
| Entity Parameter  :  dashboard
| Route Name Prefix :  dashboard
|
*/


//////////////////////////////////////////////////////////////////////////////
// routes for guests or end users
//////////////////////////////////////////////////////////////////////////////
Route::prefix('dashboards')->group(function () {
    Route::middleware('guest')->group(function () {
        //Next-Slot-Consume
});
});


//////////////////////////////////////////////////////////////////////////////
// routes for managers
//////////////////////////////////////////////////////////////////////////////
Route::prefix('manage')->group(function () {
    Route::middleware(['auth'])->group(function () {
         Route::get('dashboard', \App\Http\Livewire\Dashboard\Manage\Dashboard::class)->name('dashboard.manage.dashboard');
        //Next-Slot-Manage
});
});
