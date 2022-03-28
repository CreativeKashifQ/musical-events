<?php

namespace App\Http\Livewire\MyOffer\Manage\Components;

use App\Models\Offer;
use App\Models\MyOffer;
use Livewire\Component;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class MyEquipmentOffers extends Component
{
    use AuthorizesRequests;

    /*
    |--------------------------------------------------------------------------
    | Public Data
    |--------------------------------------------------------------------------
    | This data will be visible to client. Don't instantiate any instance of a class
    | containing sensitive information
    */
    public $service, $search, $searchBy = 'name', $orderBy = 'desc';
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
        //$this->authorize('manageMyEquipmentOffers', new MyOffer);
        $this->service = $service;

    }

    public function render()
    {

        // $offers = Offer::with(['service','booking'])->whereHas('service', function ($query) {
        //     return $query->where($this->searchBy,'like','%' . $this->search. '%');
        //     })->where([
        //     ['user_id', auth()->user()->id],
        //     ['service_type', 'Equipment'],
        // ])->orderBy('created_at', $this->orderBy)->paginate(20);
        $offers = Offer::where([['user_id', auth()->user()->id],['service_type', 'Equipment']])->paginate(20);

        return view('livewire.my-offer.manage.components.my-equipment-offers',compact('offers'));
    }


    /*
    |--------------------------------------------------------------------------
    | Methods
    |--------------------------------------------------------------------------
    | User defined methods like, register, verify or load
    */

    public function myEquipmentOffers()
    {
        //$this->authorize('manageMyEquipmentOffers', new MyOffer);
    }

    /*
    |--------------------------------------------------------------------------
    | Helper Functions
    |--------------------------------------------------------------------------
    | Class helper functions
    */
}
