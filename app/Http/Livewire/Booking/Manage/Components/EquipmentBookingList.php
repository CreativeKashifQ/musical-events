<?php

namespace App\Http\Livewire\Booking\Manage\Components;

use App\Models\Booking;
use Livewire\Component;
use App\Models\Equipment;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class EquipmentBookingList extends Component
{
    use AuthorizesRequests;

    /*
    |--------------------------------------------------------------------------
    | Public Data
    |--------------------------------------------------------------------------
    | This data will be visible to client. Don't instantiate any instance of a class
    | containing sensitive information
    */
    public $search,$searchBy='name', $orderBy = 'desc';
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
        //$this->authorize('manageEquipmentBookingList', new Booking);
    }

    public function render()
    {
        $equipments = Equipment::where([['user_id', auth()->id()],[$this->searchBy,'like','%'.$this->search.'%']])->with('bookings')->whereHas('bookings',function($booking){
            return $booking->where('service_type','Equipment')->where('status','complete');
        })->orderBy('created_at',$this->orderBy)->paginate(20);
        return view('livewire.booking.manage.components.equipment-booking-list',compact('equipments'));
    }


    /*
    |--------------------------------------------------------------------------
    | Methods
    |--------------------------------------------------------------------------
    | User defined methods like, register, verify or load
    */

    public function equipmentBookingList()
    {
        //$this->authorize('manageEquipmentBookingList', new Booking);
    }

    /*
    |--------------------------------------------------------------------------
    | Helper Functions
    |--------------------------------------------------------------------------
    | Class helper functions
    */
}
