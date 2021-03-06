<?php

namespace App\Http\Livewire\SendOffer\Manage\Components;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Component;
use App\Models\SendOffer;
use App\Models\Venue;
use Carbon\Carbon;
use App\Models\Offer;

class VenueOfferForm extends Component
{
    use AuthorizesRequests;

    /*
    |--------------------------------------------------------------------------
    | Public Data
    |--------------------------------------------------------------------------
    | This data will be visible to client. Don't instantiate any instance of a class
    | containing sensitive information
    */
    public $venue, $bookingDate,$disableSendOfferButton = false;
    /*
    |--------------------------------------------------------------------------
    | Override Properties
    |--------------------------------------------------------------------------
    | Component properties like rules, messages
    */
    protected $rules = [
        'venue.name' => 'required',
        'venue.location' => 'required',
        'venue.capacity' => 'required',
        'venue.description' => 'required',
        'venue.hourly_rate' => 'required',
        'venue.opening_time' => 'required',
        'venue.closing_time' => 'required',
        'bookingDate' => 'required',
        'venue.hours' => 'required'
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


        $this->authorize('manageVenueOfferForm', new SendOffer);
        $this->venue = Venue::where('id', $serviceId)->first();
            if ($this->venue->offer != null && $this->venue->offer->ask_amount != null) {
                $this->venue->hourly_rate = $this->venue->offer->ask_amount;
            }
        $this->venue->description  = '';
            //diff in hours using opening_time and closing_time
            $start_time = Carbon::parse($this->venue->opening_time);
            $end_time = Carbon::parse($this->venue->closing_time);
            $this->venue->hours = $start_time->diffInHours($end_time, true);


    }

    public function render()
    {
        return view('livewire.send-offer.manage.components.venue-offer-form')->layout('layouts.cms');
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


    public function sendVenueOfferForm()
    {
        $this->authorize('manageVenueOfferForm', new SendOffer);
        $this->validate();
        $offer = new Offer();
        $offer->service_id = $this->venue->id;
        $offer->service_type = 'Venue';
        $offer->user_id = auth()->user()->id;
        $offer->capacity = $this->venue->capacity;
        $offer->start_time = $this->venue->opening_time;
        $offer->end_time = $this->venue->closing_time;
        $offer->date = $this->bookingDate;
        $offer->rate = $this->venue->hourly_rate;
        $offer->hours = $this->venue->hours;
        $offer->message = $this->venue->description;
        $offer->save();
        //dispatch offer received notification
        // $this->venue->dispatchOfferReceivedNotification(['service'=>$this->venue],$offer);
        //redirect to venue providers without displaying message
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

        $venue =  $this->venue->bookings->where('service_type','Venue')->where('date', $this->bookingDate)->first() || $this->venue->under_maintenances->where('service_type','Venue')->where('date',$this->bookingDate)->count() > 0;
        if (!$venue) {
            $this->venue;
            $this->disableSendOfferButton = false;
        } else {
            $this->disableSendOfferButton = true;
            $this->dispatchBrowserEvent('alert', ['type' => 'error', 'message' => 'Not Available on selected date']);
        }
    }
}
