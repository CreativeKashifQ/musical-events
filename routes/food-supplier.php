<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
|  FoodSupplier Routes
|--------------------------------------------------------------------------
|
| Here is where you can register foodSupplier routes. All
| manage routes will be written to manage entity with associations
|
| Entity Name       :  FoodSupplier
| Group Prefix      :  food-suppliers
| Entity Parameter  :  foodSupplier
| Route Name Prefix :  food-supplier
|
*/


//////////////////////////////////////////////////////////////////////////////
// routes for guests or end users
//////////////////////////////////////////////////////////////////////////////
Route::prefix('food-suppliers')->group(function () {
    Route::middleware('guest')->group(function () {
        //Next-Slot-Consume    
});
});


//////////////////////////////////////////////////////////////////////////////
// routes for managers
//////////////////////////////////////////////////////////////////////////////
Route::prefix('manage/food-suppliers')->group(function () {
    Route::middleware('auth')->group(function () {
         Route::get('profile', \App\Http\Livewire\FoodSupplier\Manage\UserProfile::class)->name('food-supplier.manage.user-profile');
        Route::get('entity/{supplier}', \App\Http\Livewire\FoodSupplier\Manage\Entity::class)->name('food-supplier.manage.entity');
        Route::get('menu/{supplier}', \App\Http\Livewire\FoodSupplier\Manage\Menu::class)->name('food-supplier.manage.menu');
        Route::get('schedule/{supplier}', \App\Http\Livewire\FoodSupplier\Manage\Schedule::class)->name('food-supplier.manage.schedule');
        Route::get('settings/{supplier}', \App\Http\Livewire\FoodSupplier\Manage\Settings::class)->name('food-supplier.manage.settings');
        //Next-Slot-Manage    
});
});