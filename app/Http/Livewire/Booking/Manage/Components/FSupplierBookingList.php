<?php

namespace App\Http\Livewire\Booking\Manage\Components;

use App\Models\Booking;
use Livewire\Component;
use App\Models\FoodSupplier;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class FSupplierBookingList extends Component
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

        //$this->authorize('manageFSupplierBookingList', new Booking);
    }

    public function render()
    {
        $fSupplier = FoodSupplier::where('user_id', auth()->id())->first();
        return view('livewire.booking.manage.components.f-supplier-booking-list',compact('fSupplier'));
    }


    /*
    |--------------------------------------------------------------------------
    | Methods
    |--------------------------------------------------------------------------
    | User defined methods like, register, verify or load
    */

    public function fSupplierBookingList()
    {
        //$this->authorize('manageFSupplierBookingList', new Booking);
    }

    /*
    |--------------------------------------------------------------------------
    | Helper Functions
    |--------------------------------------------------------------------------
    | Class helper functions
    */
}
