<?php

namespace App\Http\Livewire\Ehost\Manage;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Component;
use App\Models\Ehost;
use App\Models\Venue;
use Carbon\Carbon;
use App\Models\Offer;


class SendOffer extends Component
{
    use AuthorizesRequests;

    /*
    |--------------------------------------------------------------------------
    | Public Data
    |--------------------------------------------------------------------------
    | This data will be visible to client. Don't instantiate any instance of a class
    | containing sensitive information
    */
    public $venue;

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
        'venue.date' =>'required',
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

    public function mount($venueId)
    {
        $this->authorize('manageSendOffer', new Ehost);
        $this->venue = Venue::where('id',$venueId)->first();
        //diff in hours using opening_time and closing_time
        $start_time = Carbon::parse($this->venue->opening_time);
        $end_time = Carbon::parse($this->venue->closing_time);
        $this->venue->hours = $start_time->diffInHours($end_time,true);

    }

    public function render()
    {
        return view('livewire.ehost.manage.send-offer')->layout('layouts.cms');
    }


    /*
    |--------------------------------------------------------------------------
    | Methods
    |--------------------------------------------------------------------------
    | User defined methods like, register, verify or load
    */

    public function sendOffer()
    {
        $this->authorize('manageSendOffer', new Ehost);
        $this->validate();

        $offer = new Offer();
        $offer->service_id = $this->venue->id;
        $offer->service_type = 'Venue';
        $offer->user_id = auth()->user()->id;
        $offer->capacity = $this->venue->capacity;
        $offer->start_time = $this->venue->opening_time;
        $offer->end_time = $this->venue->closing_time;
        $offer->date = $this->venue->date;
        $offer->rate = $this->venue->hourly_rate;
        $offer->hours = $this->venue->hours;
        $offer->message = $this->venue->description;
        $offer->status = 1;
        $offer->save();
        //redirect to venue providers without displaying message
        return redirect()->route('my-offer.manage.sent-offer');


    }

    /*
    |--------------------------------------------------------------------------
    | Helper Functions
    |--------------------------------------------------------------------------
    | Class helper functions
    */
}
