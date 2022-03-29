<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Notification;
use App\Notifications\EquipmentOfferReceivedNotification;
use App\Notifications\EquipmentOfferReceivedNotificaton;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Equipment extends Model
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

    public static function fetchByDate($date,$equipments)
    {


        $eavail = array();
        foreach ($equipments as  $equipment) {

            $available = true;
            if (
                $equipment->bookings->where('service_type','Equipment')->where('date', $date)->count() > 0
                ||
                $equipment->under_maintenances->where('date', $date)->where('service_type','Equipment')->count() > 0
            ) {
                $available = false;

            }

            $eavail[$equipment->id] = [
                'equipment' =>  $equipment, 'available' => $available
            ];
        }
        return $eavail;
    }

    public function dispatchOfferReceivedNotification($service,$offer)
    {
       
        switch ($offer->service_type) {
            case 'Equipment':
                Notification::send($service->user,new EquipmentOfferReceivedNotificaton($service));
                break;
            
            default:
                # code...
                break;
        }
        // Notification::send($service['service']->user,new OfferReceivedNotification($service['service'],$offer));

    }

    /*
    |--------------------------------------------------------------------------
    | Relations
    |--------------------------------------------------------------------------
    | User defined entity relations.
    */
    public function under_maintenances()
    {
        return $this->hasMany(UnderMaintenance::class,'service_id','id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function images()
    {
       return $this->hasMany(ServiceGallery::class,'service_id','id');
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
