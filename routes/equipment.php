<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
|  Equipment Routes
|--------------------------------------------------------------------------
|
| Here is where you can register equipment routes. All
| manage routes will be written to manage entity with associations
|
| Entity Name       :  Equipment
| Group Prefix      :  equipment
| Entity Parameter  :  equipment
| Route Name Prefix :  equipment
|
*/


//////////////////////////////////////////////////////////////////////////////
// routes for guests or end users
//////////////////////////////////////////////////////////////////////////////
Route::prefix('equipment')->group(function () {
    Route::middleware('guest')->group(function () {
        //Next-Slot-Consume
});
});


//////////////////////////////////////////////////////////////////////////////
// routes for managers
//////////////////////////////////////////////////////////////////////////////
Route::prefix('manage/equipment')->group(function () {
    Route::middleware('auth')->group(function () {
         Route::get('index', \App\Http\Livewire\Equipment\Manage\Index::class)->name('equipment.manage.index');
        Route::get('create', \App\Http\Livewire\Equipment\Manage\Create::class)->name('equipment.manage.create');
        Route::get('entity', \App\Http\Livewire\Equipment\Manage\Entity::class)->name('equipment.manage.entity');
        Route::get('gallery', \App\Http\Livewire\Equipment\Manage\Gallery::class)->name('equipment.manage.gallery');
        Route::get('schedule', \App\Http\Livewire\Equipment\Manage\Schedule::class)->name('equipment.manage.schedule');
        Route::get('pricing', \App\Http\Livewire\Equipment\Manage\Pricing::class)->name('equipment.manage.pricing');
        Route::get('maintainence', \App\Http\Livewire\Equipment\Manage\Maintainence::class)->name('equipment.manage.maintainence');
        Route::get('settings', \App\Http\Livewire\Equipment\Manage\Settings::class)->name('equipment.manage.settings');
        //Next-Slot-Manage
});
});
