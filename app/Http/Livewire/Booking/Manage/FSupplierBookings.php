<?php

namespace App\Http\Livewire\Booking\Manage;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Component;
use App\Models\Booking;
use App\Models\FoodSupplier;
use App\Models\ServiceGallery;

class FSupplierBookings extends Component
{
    use AuthorizesRequests;

    /*
    |--------------------------------------------------------------------------
    | Public Data
    |--------------------------------------------------------------------------
    | This data will be visible to client. Don't instantiate any instance of a class
    | containing sensitive information
    */
    public $bookings;
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
        //$this->authorize('manageFSupplierBookings', new Booking);
        $this->fSupplier = FoodSupplier::where('user_id',auth()->user()->id)->first();
        $this->bookings = $this->fSupplier->bookings->where('service_type','FoodSupplier');
        $this->gallery = ServiceGallery::where('service_type', 'FoodSupplier')->where('service_id', $this->fSupplier->id)->first();
        foreach($this->bookings as $booking){
            $booking->update(['is_seen'=> true]);
        }
    }

    public function render()
    {
        return view('livewire.booking.manage.f-supplier-bookings')->layout('layouts.cms');
    }


    /*
    |--------------------------------------------------------------------------
    | Methods
    |--------------------------------------------------------------------------
    | User defined methods like, register, verify or load
    */

    public function fSupplierBookings()
    {
        //$this->authorize('manageFSupplierBookings', new Booking);
    }

    /*
    |--------------------------------------------------------------------------
    | Helper Functions
    |--------------------------------------------------------------------------
    | Class helper functions
    */
}