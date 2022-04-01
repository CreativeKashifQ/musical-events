<?php

namespace App\Http\Livewire\Booking\Manage\Components;

use App\Models\Booking;
use Livewire\Component;
use App\Models\FoodSupplier;
use App\Models\ServiceGallery;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class FSupplierBookingDetailCard extends Component
{
    use AuthorizesRequests;

    /*
    |--------------------------------------------------------------------------
    | Public Data
    |--------------------------------------------------------------------------
    | This data will be visible to client. Don't instantiate any instance of a class
    | containing sensitive information
    */
    public $equipment,$bookings;
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

    public function mount(FoodSupplier $serviceId)
    {
        //$this->authorize('manageFSupplierBookingDetailCard', new Booking);
        $this->fSupplier = $serviceId;
        $this->bookings = $this->fSupplier->bookings->where('service_type','FoodSupplier')->where('status','complete');
        $this->gallery = ServiceGallery::where('service_type', 'FoodSupplier')->where('service_id', $this->fSupplier->id)->first();
        foreach($this->bookings as $booking){
            $booking->update(['is_seen'=> true]);
        }
    }

    public function render()
    {
        return view('livewire.booking.manage.components.f-supplier-booking-detail-card');
    }


    /*
    |--------------------------------------------------------------------------
    | Methods
    |--------------------------------------------------------------------------
    | User defined methods like, register, verify or load
    */

    public function fSupplierBookingDetailCard()
    {
        //$this->authorize('manageFSupplierBookingDetailCard', new Booking);
    }

    /*
    |--------------------------------------------------------------------------
    | Helper Functions
    |--------------------------------------------------------------------------
    | Class helper functions
    */
}
