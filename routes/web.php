<?php

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/migrate', function () {
    Illuminate\Support\Facades\Artisan::call('migrate:fresh --seed');
    dd('done!');
});

require_once __DIR__.'/account.php';
require_once __DIR__.'/dashboard.php';
require_once __DIR__.'/venue.php';
require_once __DIR__.'/temp.php';
require_once __DIR__.'/payment.php';
require_once __DIR__.'/equipment.php';
require_once __DIR__.'/booking.php';
require_once __DIR__.'/ehost.php';
require_once __DIR__.'/my-offer.php';
require_once __DIR__.'/offer.php';
require_once __DIR__.'/service-gallery.php';
require_once __DIR__.'/send-offer.php';
require_once __DIR__.'/my-booking.php';
require_once __DIR__.'/food-supplier.php';
require_once __DIR__.'/home.php';
