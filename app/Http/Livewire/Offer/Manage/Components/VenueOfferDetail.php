<?php

namespace App\Http\Livewire\Offer\Manage\Components;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Component;
use App\Models\Offer;
use App\Models\Venue;
use App\Models\ServiceGallery;

class VenueOfferDetail extends Component
{
    use AuthorizesRequests;

    /*
    |--------------------------------------------------------------------------
    | Public Data
    |--------------------------------------------------------------------------
    | This data will be visible to client. Don't instantiate any instance of a class
    | containing sensitive information
    */
    public $offers, $venue, $gallery;
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
    protected $listeners = ['offerDeclined', 'offerAccepted'];

    public function offerDeclined()
    {
        //
    }

    public function offerAccepted()
    {
        //
    }
    /*
    |--------------------------------------------------------------------------
    | Lifecycle Hooks
    |--------------------------------------------------------------------------
    | Component hooks like hydrate, updated, render
    */

    public function mount(Venue $serviceId)
    {
       
        $offer = Offer::where('service_id',$serviceId->id)->first();
        $this->authorize('manageVenueOfferDetail', $offer);
        $this->venue = $serviceId;
        $this->offers = $this->venue->offers->where('service_type','Venue');
        $this->gallery = ServiceGallery::where('service_type', 'Venue')->where('service_id', $this->venue->id)->first();
        foreach($this->offers as $offer){
            $offer->update(['is_seen' => true]);
        }
    }

    public function render()
    {
        return view('livewire.offer.manage.components.venue-offer-detail')->layout('layouts.cms');
    }


    /*
    |--------------------------------------------------------------------------
    | Methods
    |--------------------------------------------------------------------------
    | User defined methods like, register, verify or load
    */

    public function venueOfferDetail()
    {
        //$this->authorize('manageVenueOfferDetail', new Offer);
    }

  




    /*
    |--------------------------------------------------------------------------
    | Helper Functions
    |--------------------------------------------------------------------------
    | Class helper functions
    */
   
}
