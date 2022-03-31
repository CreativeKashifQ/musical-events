<?php

namespace App\Http\Livewire\Offer\Manage;

use App\Models\FoodSupplier;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Component;
use App\Models\Offer;

class FSupplierOffers extends Component
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

    /*
    |--------------------------------------------------------------------------
    | Lifecycle Hooks
    |--------------------------------------------------------------------------
    | Component hooks like hydrate, updated, render
    */

    public function mount()
    {
       
        
        //$this->authorize('manageFSupplierOffers', new Offer);
        $this->fSupplier = FoodSupplier::where('user_id',auth()->user()->id)->first();
        if(!$this->fSupplier){
            $this->fSupplier = new FoodSupplier();
            $this->fSupplier->user_id = auth()->user()->id;
            $this->fSupplier->save();
        }
        $this->offers = $this->fSupplier->offers->where('service_type','FoodSupplier');
     
        // foreach($this->offers as $offer){
        //     $offer->update(['is_seen' => true]);
        // }
    }

    public function render()
    {
        
        return view('livewire.offer.manage.f-supplier-offers')->layout('layouts.cms');
    }


    /*
    |--------------------------------------------------------------------------
    | Methods
    |--------------------------------------------------------------------------
    | User defined methods like, register, verify or load
    */

    public function fSupplierOffers()
    {
        //$this->authorize('manageFSupplierOffers', new Offer);
    }

    /*
    |--------------------------------------------------------------------------
    | Helper Functions
    |--------------------------------------------------------------------------
    | Class helper functions
    */
}