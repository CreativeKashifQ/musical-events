<?php
use Illuminate\Support\Facades\Route;


Route::get('/migrate', function () {
    Illuminate\Support\Facades\Artisan::call('config:clear');
    Illuminate\Support\Facades\Artisan::call('cache:clear');
    Illuminate\Support\Facades\Artisan::call('view:clear');
    Illuminate\Support\Facades\Artisan::call('migrate:fresh --seed');
    dd('done!');
});
