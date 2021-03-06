<?php

namespace App\Models;

use App\Notifications\FSupplierBookingNotification;
use App\Notifications\ServiceBookingNotification;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Notification;

class Booking extends Model
{
    use HasFactory;

    /*
    |--------------------------------------------------------------------------
    | Constant Properties
    |--------------------------------------------------------------------------
    | Entiry static constant properties.
    */
    protected $guarded = [];
    /*
    |--------------------------------------------------------------------------
    | Override Properties
    |--------------------------------------------------------------------------
    | Component proerties like fillable, casts.
    */

    protected $casts = ['created_at' => 'datetime', 'updated_at' => 'datetime'];

    /*
    |--------------------------------------------------------------------------
    | Get Attributes
    |--------------------------------------------------------------------------
    | User defined get property attributes.
    */


    /*
    |--------------------------------------------------------------------------
    | Business Logic
    |--------------------------------------------------------------------------
    | User defined entity methods.
    */
    public function dispatchServiceBookingNotification($booking,$type)
    {
        
        switch ($type) {
            case 'FoodSupplier':
                Notification::send($booking->service->user,new FSupplierBookingNotification($booking));
                break;
            
            default:
                # code...
                break;
        }
        
    }

    /*
    |--------------------------------------------------------------------------
    | Relations
    |--------------------------------------------------------------------------
    | User defined entity relations.
    */

    public function event_host()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }



    public function service()
    {
        $relations = [
            'Venue' => Venue::class,
            'Vendor' => Vendor::class,
            'Equipment' => Equipment::class,
            'FoodSupplier' => FoodSupplier::class,

        ];
        return $this->belongsTo($relations[$this->service_type]??Equipment::class,'service_id');

    }
}
