<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
|  Home Routes
|--------------------------------------------------------------------------
|
| Here is where you can register home routes. All
| manage routes will be written to manage entity with associations
|
| Entity Name       :  Home
| Group Prefix      :  homes
| Entity Parameter  :  home
| Route Name Prefix :  home
|
*/


//////////////////////////////////////////////////////////////////////////////
// routes for guests or end users
//////////////////////////////////////////////////////////////////////////////

    Route::middleware('guest')->group(function () {
        Route::get('/', \App\Http\Livewire\Home\Consume\Welcome::class)->name('/');
        //Next-Slot-Consume
});


//////////////////////////////////////////////////////////////////////////////
// routes for managers
//////////////////////////////////////////////////////////////////////////////
Route::prefix('manage/homes')->group(function () {
    Route::middleware('auth')->group(function () {
         //Next-Slot-Manage
});
});
