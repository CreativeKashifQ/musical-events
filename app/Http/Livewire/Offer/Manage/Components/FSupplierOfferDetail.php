<?php

namespace App\Http\Livewire\Offer\Manage\Components;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Component;
use App\Models\Offer;

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
        //$this->authorize('manageFSupplierOfferDetail', new Offer);
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