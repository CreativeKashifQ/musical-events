<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
|  Account Routes
|--------------------------------------------------------------------------
|
| Here is where you can register account routes. All
| manage routes will be written to manage entity with associations
|
| Entity Name       :  user
| Group Prefix      :  account
| Entity Parameter  :  user
| Route Name Prefix :  account
|
*/

//////////////////////////////////////////////////////////////////////////////
// routes for guests or end users
//////////////////////////////////////////////////////////////////////////////
Route::prefix('account')->group(function () {
    Route::middleware('guest')->group(function () {
        Route::get('register', \App\Http\Livewire\Account\Consume\Register::class)->name('account.consume.register');
        Route::get('select-role', \App\Http\Livewire\Account\Consume\SelectRole::class)->name('account.consume.select-role');
        Route::get('login', \App\Http\Livewire\Account\Consume\Login::class)->name('account.consume.login');
        Route::get('forgot-password', \App\Http\Livewire\Account\Consume\ForgotPassword::class)->name('account.consume.forgot-password');
        //Next-Slot-Consume
    });
    Route::get('verify-email/{requestValidator}/{secret}', \App\Http\Livewire\Account\Consume\VerifyEmail::class)->name('account.consume.verify-email');
    Route::get('reset-password/{requestValidator}/{secret}', \App\Http\Livewire\Account\Consume\ResetPassword::class)->name('account.consume.reset-password');
});


//////////////////////////////////////////////////////////////////////////////
// routes for managers
//////////////////////////////////////////////////////////////////////////////
Route::prefix('manage/account')->group(function () {
    Route::middleware('auth')->group(function () {
        Route::get('email-verification-required', \App\Http\Livewire\Account\Manage\EmailVerificationRequired::class)->name('account.manage.email-verification-required');
        //Next-Slot-Manage
    });
});
