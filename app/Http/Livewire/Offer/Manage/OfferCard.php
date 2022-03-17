<?php

namespace App\Http\Livewire\Offer\Manage;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Component;
use App\Models\Offer;
use App\Models\ServiceGallery;

class Offercard extends Component
{
    use AuthorizesRequests;

    /*
    |--------------------------------------------------------------------------
    | Public Data
    |--------------------------------------------------------------------------
    | This data will be visible to client. Don't instantiate any instance of a class
    | containing sensitive information
    */
    public $offer,$gallery,$toggleAccept=false,$toggleDecline=false;
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

    public function mount($offer)
    {
        //$this->authorize('manageOffercard', new Offer);
        $this->offer = Offer::where('id',$offer)->first();
        $this->gallery = ServiceGallery::where('service_type',$this->offer->service_type)->where('service_id',$this->offer->service_id)->first();


    }

    public function render()
    {
        return view('livewire.offer.manage.offercard')->layout('layouts.cms');
    }


    /*
    |--------------------------------------------------------------------------
    | Methods
    |--------------------------------------------------------------------------
    | User defined methods like, register, verify or load
    */

    public function offercard()
    {
        //$this->authorize('manageOffercard', new Offer);
    }

    public function toggleAccept()
    {
       $this->toggleDecline = false;
       $this->toggleAccept = true;
    }

    public function toggleDecline()
    {
        $this->toggleAccept = false;
        $this->toggleDecline = true;
    }

    /*
    |--------------------------------------------------------------------------
    | Helper Functions
    |--------------------------------------------------------------------------
    | Class helper functions
    */
}
