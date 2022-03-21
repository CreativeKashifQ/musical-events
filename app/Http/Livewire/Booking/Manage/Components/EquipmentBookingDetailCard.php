<?php

namespace App\Http\Livewire\Booking\Manage\Components;

use App\Models\Booking;
use Livewire\Component;
use App\Models\Equipment;
use App\Models\ServiceGallery;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class EquipmentBookingDetailCard extends Component
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

    public function mount(Equipment $serviceId)
    {

        //$this->authorize('manageEquipmentBookingDetailCard', new Booking);
        $this->equipment = $serviceId;
        $this->bookings = $this->equipment->bookings;
        $this->gallery = ServiceGallery::where('service_type', 'Equipment')->where('service_id', $this->equipment->id)->first();
    }

    public function render()
    {
        return view('livewire.booking.manage.components.equipment-booking-detail-card');
    }


    /*
    |--------------------------------------------------------------------------
    | Methods
    |--------------------------------------------------------------------------
    | User defined methods like, register, verify or load
    */

    public function equipmentBookingDetailCard()
    {
        //$this->authorize('manageEquipmentBookingDetailCard', new Booking);
    }

    /*
    |--------------------------------------------------------------------------
    | Helper Functions
    |--------------------------------------------------------------------------
    | Class helper functions
    */
}
