<?php

namespace App\Models;

use App\Notifications\ServiceAcceptOrDeclineNotification;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Notification;

class Offer extends Model
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
    public function dispatchOfferDeclinedNotification($offer,$status)
    {
        Notification::send($offer->event_host,new ServiceAcceptOrDeclineNotification($offer,$status));
    }

    public function dispatchOfferAcceptNotification($offer,$status)
    {
        Notification::send($offer->event_host,new ServiceAcceptOrDeclineNotification($offer,$status));
    }

    /*
    |--------------------------------------------------------------------------
    | Relations
    |--------------------------------------------------------------------------
    | User defined entity relations.
    */
    public function venue()
    {
        return $this->belongsTo(Venue::class,'role_id','id');
    }

    public function event_host()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function service()
    {
        $relations = [
            'Venue' => Venue::class,
            'Equipment' => Equipment::class

        ];
        return $this->belongsTo($relations[$this->service_type]??Venue::class,'service_id','id');

    }

    public function booking()
    {
        return $this->hasOne(Booking::class,'offer_id');
    }
}
