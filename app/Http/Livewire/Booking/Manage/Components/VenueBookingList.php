<?php

namespace App\Http\Livewire\Booking\Manage\Components;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Component;
use App\Models\Booking;
use App\Models\User;
use App\Models\Venue;

class VenueBookingList extends Component
{
    use AuthorizesRequests;

    /*
    |--------------------------------------------------------------------------
    | Public Data
    |--------------------------------------------------------------------------
    | This data will be visible to client. Don't instantiate any instance of a class
    | containing sensitive information
    */

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

    public function mount()
    {
        //$this->authorize('manageVenueBookingList', new Booking);
    }

    public function render()
    {   
      

        // lazy loading
        // $venues = auth()->user()->venues->filter(function($venue){
        //     return  
        // });

        // 140ms;
        // select * from venues;
        // execute;
        // foreach($venues as $venue){
        //     14000ms
        //     select * from bookings were service_id=venue.id;
        //     execute;
        // }
        // dd($venues);

        /********************************************************************/

        // eager loading
        // 140ms
        // select * from venues where user_id=1 and venues.id=bookings.service_id;
        // execute;
        $venues = Venue::where('user_id', auth()->id())->with('bookings')->whereHas('bookings',function($booking){
            return $booking;
        })->get();
        return view('livewire.booking.manage.components.venue-booking-list',compact('venues'));
    }


    /*
    |--------------------------------------------------------------------------
    | Methods
    |--------------------------------------------------------------------------
    | User defined methods like, register, verify or load
    */

    public function venueBookingList()
    {
        //$this->authorize('manageVenueBookingList', new Booking);
    }

    /*
    |--------------------------------------------------------------------------
    | Helper Functions
    |--------------------------------------------------------------------------
    | Class helper functions
    */
}