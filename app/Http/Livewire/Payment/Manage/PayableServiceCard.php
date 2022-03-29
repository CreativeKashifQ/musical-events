<?php

namespace App\Http\Livewire\Payment\Manage;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Component;
use App\Models\Payment;
use App\Models\Offer;
use App\Models\Venue;
use App\Models\Equipment;
use App\Models\FoodSupplier;

class PayableServiceCard extends Component
{
    use AuthorizesRequests;

    /*
    |--------------------------------------------------------------------------
    | Public Data
    |--------------------------------------------------------------------------
    | This data will be visible to client. Don't instantiate any instance of a class
    | containing sensitive information
    */
    public $service, $offer;
    /*
    |--------------------------------------------------------------------------
    | Override Properties
    |--------------------------------------------------------------------------
    | Component properties like rules, messages
    */

    /*
    |--------------------------------------------------------------------------
    | Listeners
    |--------------------------------------------------------------------------
    | Livewire event listeners like created, updated or deleted
    */

    /*
    |--------------------------------------------------------------------------
    | Lifecycle Hooks
    |--------------------------------------------------------------------------
    | Component hooks like hydrate, updated, render
    */

    public function mount($service = 'venue', Offer $offer)
    {

        $this->authorize('managePayableServiceCard', $offer);
        $this->service = $service;
        $this->offer = $offer;
        $this->verifyBookingDate($offer, $service);
    }

    public function render()
    {
        return view('livewire.payment.manage.payable-service-card')->layout('layouts.cms');
    }


    /*
    |--------------------------------------------------------------------------
    | Methods
    |--------------------------------------------------------------------------
    | User defined methods like, register, verify or load
    */

    public function payableServiceDetail()
    {
    }

    /*
    |--------------------------------------------------------------------------
    | Helper Functions
    |--------------------------------------------------------------------------
    | Class helper functions
    */
    public function verifyBookingDate($offer, $service)
    {
        if($service == 'venue'){
            $venue = Venue::where('id', $offer->service_id)->first();
            $booking =  $venue->bookings->where('service_type', 'Venue')->where('date', $offer->date)->first() || $venue->under_maintenances->where('service_type', 'Venue')->where('date', $offer->date)->count() > 0;
            if (!$booking) {
                $venue;
            } else {
                return redirect()->route('my-offer.manage.sent-offer', ['service' => 'venue'])->with('error', 'Already Booked');
            }
        }elseif($service == 'equipment'){
            $equipment = Equipment::where('id', $offer->service_id)->first();
            $booking =  $equipment->bookings->where('service_type', 'Equipment')->where('date', $offer->date)->first() || $equipment->under_maintenances->where('service_type', 'Equipment')->where('date', $offer->date)->count() > 0;
            if (!$booking) {
                $equipment;
            } else {
                return redirect()->route('my-offer.manage.sent-offer', ['service' => 'equipment'])->with('error', 'Already Booked');
            }
           
        }elseif($service == 'f-supplier'){
            $fSupplier = FoodSupplier::where('id', $offer->service_id)->first();
            $booking =  $fSupplier->bookings->where('service_type', 'FoodSupplier')->where('date', $offer->date)->first() || $fSupplier->under_maintenances->where('service_type', 'FoodSupplier')->where('date', $offer->date)->count() > 0;
            if (!$booking) {
                $fSupplier;
            } else {
                return redirect()->route('my-offer.manage.sent-offer', ['service' => 'f-supplier'])->with('error', 'Already Booked');
            }
        }

        
    }
}
