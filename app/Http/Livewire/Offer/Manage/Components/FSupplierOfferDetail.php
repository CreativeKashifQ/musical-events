<?php

namespace App\Http\Livewire\Offer\Manage\Components;

use App\Models\Offer;
use Livewire\Component;
use App\Models\FoodSupplier;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class FSupplierOfferDetail extends Component
{
    use AuthorizesRequests;

    /*
    |--------------------------------------------------------------------------
    | Public Data
    |--------------------------------------------------------------------------
    | This data will be visible to client. Don't instantiate any instance of a class
    | containing sensitive information
    */
    public $offers, $fSupplier, $gallery;
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

    public function mount(FoodSupplier $serviceId)
    {
       
        //$this->authorize('manageFSupplierOfferDetail', new Offer);
        $this->fSupplier = $serviceId;
        $this->offers = $this->fSupplier->offers->where('service_type','FoodSupplier');
       
       
        foreach($this->offers as $offer){
            $offer->update(['is_seen' => true]);
        }
    }

    public function render()
    {
        return view('livewire.offer.manage.components.f-supplier-offer-detail');
    }


    /*
    |--------------------------------------------------------------------------
    | Methods
    |--------------------------------------------------------------------------
    | User defined methods like, register, verify or load
    */

    public function fSupplierOfferDetail()
    {
        //$this->authorize('manageFSupplierOfferDetail', new Offer);
    }

    /*
    |--------------------------------------------------------------------------
    | Helper Functions
    |--------------------------------------------------------------------------
    | Class helper functions
    */
}
