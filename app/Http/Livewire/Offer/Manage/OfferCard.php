<?php

namespace App\Http\Livewire\Offer\Manage;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Component;
use App\Models\Offer;
use App\Models\ServiceGallery;
use App\Models\Venue;

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
    public $serviceType,$serviceId;
    /*
    |--------------------------------------------------------------------------
    | Override Properties
    |--------------------------------------------------------------------------
    | Component properties like rules, messages
    */
    protected $rules = [
        'decline_remarks' => 'required',
        'accept_remarks' => 'required'
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

    public function mount($serviceType , $serviceId)
    {

        $offer = Offer::where('service_id',$serviceId)->where('service_type',$serviceType)->first();
        $this->authorize('manageOffercard', $offer);
        $this->serviceType = $serviceType;
        $this->serviceId = $serviceId;
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



    /*
    |--------------------------------------------------------------------------
    | Helper Functions
    |--------------------------------------------------------------------------
    | Class helper functions
    */


}
