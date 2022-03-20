<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoodSupplier extends Model
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
    protected $fillable = ['logo_image'];

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
    public static function fetchByDate($date,$fSuppliers)
    {

        $fSupplieravail = array();
        foreach ($fSuppliers as  $fSupplier) {
            $available = true;
            if (
                $fSupplier->bookings->where('date', $date)->count() > 0
            ) {
                $available = false;
            }

            $fSupplieravail[$fSupplier->id] = [
                'fSupplier' =>  $fSupplier, 'available' => $available
            ];
        }
        return $fSupplieravail;
    }

    /*
    |--------------------------------------------------------------------------
    | Relations
    |--------------------------------------------------------------------------
    | User defined entity relations.
    */


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function menu_gallery()
    {
       return $this->hasMany(MenuGallery::class,'user_id','user_id');
    }

    public function offers()
    {
        return $this->hasMany(Offer::class,'service_id');
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class,'service_id');
    }
}
