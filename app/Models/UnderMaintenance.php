<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnderMaintenance extends Model
{
    use HasFactory;
    /*
    |--------------------------------------------------------------------------
    | Constant Properties
    |--------------------------------------------------------------------------
    | Entiry static constant properties.
    */

    /*
    |--------------------------------------------------------------------------
    | Override Properties
    |--------------------------------------------------------------------------
    | Component proerties like fillable, casts.
    */

    protected $casts = ['created_at' => 'datetime', 'updated_at' => 'datetime','date' => 'datetime'];

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


    /*
    |--------------------------------------------------------------------------
    | Relations
    |--------------------------------------------------------------------------
    | User defined entity relations.
    */
    public function venue()
    {
        return $this->belongsTo(Venue::class);
    }
}
