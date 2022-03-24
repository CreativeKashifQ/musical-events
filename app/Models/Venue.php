<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venue extends Model
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


    public static function fetchByDate($date)
    {

        $venues = Venue::with('bookings')->where('status', 'Active')->get();
        $vavail = array();
        foreach ($venues as  $venue) {
            $available = true;
            if (
                $venue->bookings->where('date', $date)->count() > 0
                ||
                $venue->under_maintenances->where('date', $date)->where('service_type','Venue')->count() > 0
            ) {
                $available = false;
            }

            $vavail[$venue->id] = [
                'venue' =>  $venue, 'available' => $available
            ];
        }
        return $vavail;
    }

    /*
    |--------------------------------------------------------------------------
    | Relations
    |--------------------------------------------------------------------------
    | User defined entity relations.
    */
    public function under_maintenances()
    {
        return $this->hasMany(UnderMaintenance::class, 'service_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function images()
    {
        return $this->hasMany(ServiceGallery::class, 'service_id', 'id');
    }

    public function offers()
    {
        return $this->hasMany(Offer::class, 'service_id');
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class, 'service_id');
    }
}
