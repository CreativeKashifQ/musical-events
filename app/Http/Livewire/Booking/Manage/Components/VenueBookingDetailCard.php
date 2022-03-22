<?php

namespace App\Http\Livewire\Booking\Manage\Components;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Component;
use App\Models\Booking;
use App\Models\Venue;
use App\Models\ServiceGallery;

class VenueBookingDetailCard extends Component
{
    use AuthorizesRequests;

    /*
    |--------------------------------------------------------------------------
    | Public Data
    |--------------------------------------------------------------------------
    | This data will be visible to client. Don't instantiate any instance of a class
    | containing sensitive information
    */
    public $venue,$bookings;
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

    public function mount(Venue $serviceId)
    {
        
        //$this->authorize('manageVenueBookingDetailCard', new Booking);
        $this->venue = $serviceId;
        $this->bookings = $this->venue->bookings;
        $this->gallery = ServiceGallery::where('service_type', 'Venue')->where('service_id', $this->venue->id)->first();
       
    }

    public function render()
    {
        return view('livewire.booking.manage.components.venue-booking-detail-card');
    }


    /*
    |--------------------------------------------------------------------------
    | Methods
    |--------------------------------------------------------------------------
    | User defined methods like, register, verify or load
    */

    public function venueBookingDetailCard()
    {
        //$this->authorize('manageVenueBookingDetailCard', new Booking);
    }

    /*
    |--------------------------------------------------------------------------
    | Helper Functions
    |--------------------------------------------------------------------------
    | Class helper functions
    */
}