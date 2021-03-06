<?php

namespace App\Http\Livewire\Booking\Manage\Components;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Component;
use App\Models\Booking;

class MArtistBookingDetailCard extends Component
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
        //$this->authorize('manageMArtistBookingDetailCard', new Booking);
    }

    public function render()
    {
        return view('livewire.booking.manage.components.m-artist-booking-detail-card');
    }


    /*
    |--------------------------------------------------------------------------
    | Methods
    |--------------------------------------------------------------------------
    | User defined methods like, register, verify or load
    */

    public function mArtistBookingDetailCard()
    {
        //$this->authorize('manageMArtistBookingDetailCard', new Booking);
    }

    /*
    |--------------------------------------------------------------------------
    | Helper Functions
    |--------------------------------------------------------------------------
    | Class helper functions
    */
}