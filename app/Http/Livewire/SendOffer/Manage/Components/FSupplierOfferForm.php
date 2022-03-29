<?php

namespace App\Http\Livewire\SendOffer\Manage\Components;

use Carbon\Carbon;
use App\Models\Offer;
use Livewire\Component;
use App\Models\Equipment;
use App\Models\SendOffer;
use App\Models\FoodSupplier;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class FSupplierOfferForm extends Component
{
    use AuthorizesRequests;

    /*
    |--------------------------------------------------------------------------
    | Public Data
    |--------------------------------------------------------------------------
    | This data will be visible to client. Don't instantiate any instance of a class
    | containing sensitive information
    */
    public $fSupplier, $bookingDate,$disableSendOfferButton = false,$message;
    /*
    |--------------------------------------------------------------------------
    | Override Properties
    |--------------------------------------------------------------------------
    | Component properties like rules, messages
    */
    protected $rules = [
        'fSupplier.user.name' => 'required',
        'fSupplier.user.email' => 'required',
        'fSupplier.bio' => 'required',
        'fSupplier.opening_time' => 'required',
        'fSupplier.closing_time' => 'required',
        'bookingDate' => 'required',
        'message' => 'required'
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

        //$this->authorize('manageFSupplierOfferForm', new SendOffer);
        $this->fSupplier = FoodSupplier::where('id', $serviceId)->first();

    }

    public function render()
    {
        return view('livewire.send-offer.manage.components.f-supplier-offer-form');
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

    public function sendFSupplierOfferForm()
    {
        // $this->authorize('manageEquipmentOfferForm', new SendOffer);
        $this->validate();
        $offer = new Offer();
        $offer->service_id = $this->fSupplier->id;
        $offer->service_type = 'FoodSupplier';
        $offer->user_id = auth()->user()->id;
        $offer->start_time = $this->fSupplier->opening_time;
        $offer->end_time = $this->fSupplier->closing_time;
        $offer->date = $this->bookingDate;
        $offer->message = $this->message;
        $offer->save();
        //dispatch offer received notification
        $this->fSupplier->dispatchOfferReceivedNotification($this->fSupplier,$offer);
        //redirect to fSupplier providers without displaying message
        return redirect()->route('my-offer.manage.sent-offer',['service' => 'f-supplier']);
    }

    /*
    |--------------------------------------------------------------------------
    | Helper Functions
    |--------------------------------------------------------------------------
    | Class helper functions
    */
    public function verifyBookingDate()
    {

        $booking =  $this->fSupplier->bookings->where('date', $this->bookingDate)->where('service_type','FoodSupplier')->first();
        if (!$booking) {
            $this->fSupplier;
            $this->disableSendOfferButton = false;
        } else {
            $this->disableSendOfferButton = true;
            $this->dispatchBrowserEvent('alert', ['type' => 'error', 'message' => 'Not Available on selected date']);
        }
    }
}
