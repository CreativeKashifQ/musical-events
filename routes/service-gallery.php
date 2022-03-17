<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
|  ServiceGallery Routes
|--------------------------------------------------------------------------
|
| Here is where you can register serviceGallery routes. All
| manage routes will be written to manage entity with associations
|
| Entity Name       :  ServiceGallery
| Group Prefix      :  service-galleries
| Entity Parameter  :  serviceGallery
| Route Name Prefix :  service-gallery
|
*/


//////////////////////////////////////////////////////////////////////////////
// routes for guests or end users
//////////////////////////////////////////////////////////////////////////////
Route::prefix('service-galleries')->group(function () {
    Route::middleware('guest')->group(function () {
        //Next-Slot-Consume
});
});


//////////////////////////////////////////////////////////////////////////////
// routes for managers
//////////////////////////////////////////////////////////////////////////////
Route::prefix('manage/service-galleries')->group(function () {
    Route::middleware('auth')->group(function () {
         Route::get('service-images/{serviceType}/{serviceId}', \App\Http\Livewire\ServiceGallery\Manage\ServiceImages::class)->name('service-gallery.manage.service-images');
        //Next-Slot-Manage
});
});
