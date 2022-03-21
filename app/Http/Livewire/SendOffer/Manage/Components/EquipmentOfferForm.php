<?php

namespace App\Http\Livewire\SendOffer\Manage\Components;

use Carbon\Carbon;
use App\Models\Offer;
use Livewire\Component;
use App\Models\Equipment;
use App\Models\SendOffer;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class EquipmentOfferForm extends Component
{
    use AuthorizesRequests;

    /*
    |--------------------------------------------------------------------------
    | Public Data
    |--------------------------------------------------------------------------
    | This data will be visible to client. Don't instantiate any instance of a class
    | containing sensitive information
    */
    public $equipment, $bookingDate,$disableSendOfferButton = false;
    /*
    |--------------------------------------------------------------------------
    | Override Properties
    |--------------------------------------------------------------------------
    | Component properties like rules, messages
    */
    protected $rules = [
        'equipment.name' => 'required',
        'equipment.location' => 'required',
        'equipment.quantity' => 'required',
        'equipment.description' => 'required',
        'equipment.hourly_rate' => 'required',
        'equipment.opening_time' => 'required',
        'equipment.closing_time' => 'required',
        'bookingDate' => 'required',
        'equipment.hours' => 'required'
    ];
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

    public function mount($serviceId)
    {
        //$this->authorize('manageEquipmentOfferForm', new SendOffer);

        $this->equipment = Equipment::where('id', $serviceId)->first();
            if ($this->equipment->offer != null && $this->equipment->offer->ask_amount != null) {
                $this->equipment->hourly_rate = $this->equipment->offer->ask_amount;
            }
            //diff in hours using opening_time and closing_time
            $start_time = Carbon::parse($this->equipment->opening_time);
            $end_time = Carbon::parse($this->equipment->closing_time);
            $this->equipment->hours = $start_time->diffInHours($end_time, true);
    }

    public function render()
    {
        return view('livewire.send-offer.manage.components.equipment-offer-form');
    }

    public function updatedBookingDate()
    {
        $this->verifyBookingDate();
    }

    /*
    |--------------------------------------------------------------------------
    | Methods
    |--------------------------------------------------------------------------
    | User defined methods like, register, verify or load
    */

    public function equipmentOfferForm()
    {
        //$this->authorize('manageEquipmentOfferForm', new SendOffer);
    }

    public function sendEquipmentOfferForm()
    {
        // $this->authorize('manageEquipmentOfferForm', new SendOffer);
        $this->validate();
        $offer = new Offer();
        $offer->service_id = $this->equipment->id;
        $offer->service_type = 'Equipment';
        $offer->user_id = auth()->user()->id;
        $offer->capacity = $this->equipment->quantity;
        $offer->start_time = $this->equipment->opening_time;
        $offer->end_time = $this->equipment->closing_time;
        $offer->date = $this->bookingDate;
        $offer->rate = $this->equipment->hourly_rate;
        $offer->hours = $this->equipment->hours;
        $offer->message = $this->equipment->description;
        $offer->save();
        //dispatch offer received notification
        $this->equipment->dispatchOfferReceivedNotification(['service' => $this->equipment],$offer);
        //redirect to equipment providers without displaying message
        return redirect()->route('my-offer.manage.sent-offer');
    }

    /*
    |--------------------------------------------------------------------------
    | Helper Functions
    |--------------------------------------------------------------------------
    | Class helper functions
    */

    public function verifyBookingDate()
    {

        $equipment =  $this->equipment->bookings->where('date', $this->bookingDate)->first() || $this->equipment->under_maintenances->where('date',$this->bookingDate)->count() > 0;
        if (!$equipment) {
            $this->equipment;
            $this->disableSendOfferButton = false;
        } else {
            $this->disableSendOfferButton = true;
            $this->dispatchBrowserEvent('alert', ['type' => 'error', 'message' => 'Not Available on selected date']);
        }
    }
}
