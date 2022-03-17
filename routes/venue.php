<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
|  Venue Routes
|--------------------------------------------------------------------------
|
| Here is where you can register venue routes. All
| manage routes will be written to manage entity with associations
|
| Entity Name       :  Venue
| Group Prefix      :  venues
| Entity Parameter  :  venue
| Route Name Prefix :  venue
|
*/


//////////////////////////////////////////////////////////////////////////////
// routes for guests or end users
//////////////////////////////////////////////////////////////////////////////
Route::prefix('venues')->group(function () {
    Route::middleware('guest')->group(function () {
        //Next-Slot-Consume
    });
});


//////////////////////////////////////////////////////////////////////////////
// routes for managers
//////////////////////////////////////////////////////////////////////////////
Route::prefix('manage/venues')->group(function () {
    Route::middleware('auth')->group(function () {
        Route::get('index', \App\Http\Livewire\Venue\Manage\Index::class)->name('venue.manage.index');
        Route::get('create', \App\Http\Livewire\Venue\Manage\Create::class)->name('venue.manage.create');
        Route::get('entity/{venue}', \App\Http\Livewire\Venue\Manage\Entity::class)->name('venue.manage.entity');
        Route::get('gallery/{venue}', \App\Http\Livewire\Venue\Manage\Gallery::class)->name('venue.manage.gallery');
        Route::get('schedule/{venue}', \App\Http\Livewire\Venue\Manage\Schedule::class)->name('venue.manage.schedule');
        Route::get('pricing/{venue}', \App\Http\Livewire\Venue\Manage\Pricing::class)->name('venue.manage.pricing');
        Route::get('maintenance/{venue}', \App\Http\Livewire\Venue\Manage\Maintenance::class)->name('venue.manage.maintenance');
        Route::get('setting/{venue}', \App\Http\Livewire\Venue\Manage\Setting::class)->name('venue.manage.setting');
        //Next-Slot-Manage
    });
});
