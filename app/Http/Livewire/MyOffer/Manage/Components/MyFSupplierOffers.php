<?php

namespace App\Http\Livewire\MyOffer\Manage\Components;

use App\Models\Offer;
use App\Models\MyOffer;
use Livewire\Component;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class MyFSupplierOffers extends Component
{
    use AuthorizesRequests;

    /*
    |--------------------------------------------------------------------------
    | Public Data
    |--------------------------------------------------------------------------
    | This data will be visible to client. Don't instantiate any instance of a class
    | containing sensitive information
    */
    public $service, $search, $searchBy = 'gender', $orderBy = 'desc';
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

    public function mount($service)
    {

        //$this->authorize('manageMyFSupplierOffers', new MyOffer);
        $this->service = $service;
    }

    public function render()
    {
        $offers = Offer::with(['service','booking'])->whereHas('service', function ($query) {
            return $query->where($this->searchBy,'like','%' . $this->search. '%');
            })->where([
            ['user_id', auth()->user()->id],
            ['service_type', 'FoodSupplier'],
        ])->orderBy('created_at', $this->orderBy)->paginate(20);

        return view('livewire.my-offer.manage.components.my-f-supplier-offers',compact('offers'));
    }


    /*
    |--------------------------------------------------------------------------
    | Methods
    |--------------------------------------------------------------------------
    | User defined methods like, register, verify or load
    */

    public function myFSupplierOffers()
    {
        //$this->authorize('manageMyFSupplierOffers', new MyOffer);
    }

    /*
    |--------------------------------------------------------------------------
    | Helper Functions
    |--------------------------------------------------------------------------
    | Class helper functions
    */
}
