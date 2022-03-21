<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
|  Ehost Routes
|--------------------------------------------------------------------------
|
| Here is where you can register ehost routes. All
| manage routes will be written to manage entity with associations
|
| Entity Name       :  Ehost
| Group Prefix      :  ehosts
| Entity Parameter  :  ehost
| Route Name Prefix :  ehost
|
*/


//////////////////////////////////////////////////////////////////////////////
// routes for guests or end users
//////////////////////////////////////////////////////////////////////////////
Route::prefix('ehosts')->group(function () {
    Route::middleware('guest')->group(function () {
        //Next-Slot-Consume
});
});


//////////////////////////////////////////////////////////////////////////////
// routes for managers
//////////////////////////////////////////////////////////////////////////////
Route::prefix('manage/ehosts')->group(function () {
    Route::middleware('auth')->group(function () {
        Route::get('book-service/{service?}', \App\Http\Livewire\Ehost\Manage\BookService::class)->name('ehost.manage.book-service');

        //Next-Slot-Manage
});
});
