<?php

namespace App\Http\Livewire\MyBooking\Manage\Components;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Component;
use App\Models\Booking;


class MyVenueBookings extends Component
{
    use AuthorizesRequests;

    /*
    |--------------------------------------------------------------------------
    | Public Data
    |--------------------------------------------------------------------------
    | This data will be visible to client. Don't instantiate any instance of a class
    | containing sensitive information
    */
    public $service, $search, $searchBy = 'name', $orderBy = 'desc';
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

    public function mount($service)
    {
        $this->service = $service;
    }

    public function render()
    {
        $bookings = Booking::with('service')->whereHas('service', function ($query) {
            return $query->where($this->searchBy,'like','%' . $this->search. '%');
            })->where([
            ['user_id', auth()->user()->id],
            ['service_type', ucfirst($this->service)],
        ])->orderBy('created_at', $this->orderBy)->paginate(20);
        return view('livewire.my-booking.manage.components.my-venue-bookings',compact('bookings'))->layout('layouts.cms');
    }


    /*
    |--------------------------------------------------------------------------
    | Methods
    |--------------------------------------------------------------------------
    | User defined methods like, register, verify or load
    */

    public function myVenueBookings()
    {
    }

    /*
    |--------------------------------------------------------------------------
    | Helper Functions
    |--------------------------------------------------------------------------
    | Class helper functions
    */
}
