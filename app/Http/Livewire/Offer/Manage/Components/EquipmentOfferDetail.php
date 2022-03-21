<?php

namespace App\Http\Livewire\Offer\Manage\Components;

use App\Models\Offer;
use Livewire\Component;
use App\Models\Equipment;
use App\Models\ServiceGallery;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class EquipmentOfferDetail extends Component
{
    use AuthorizesRequests;

    /*
    |--------------------------------------------------------------------------
    | Public Data
    |--------------------------------------------------------------------------
    | This data will be visible to client. Don't instantiate any instance of a class
    | containing sensitive information
    */
    public $offers, $equipment, $gallery;
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

    public function mount(Equipment $serviceId)
    {
        //$this->authorize('manageEquipmentOfferDetail', new Offer);
        // $offer = Offer::where('service_id',$serviceId->id)->first();
        // $this->authorize('manageequipmentOfferDetail', $offer);
        $this->equipment = $serviceId;
        $this->offers = $this->equipment->offers;
        $this->gallery = ServiceGallery::where('service_type', 'Equipment')->where('service_id', $this->equipment->id)->first();
    }

    public function render()
    {
        return view('livewire.offer.manage.components.equipment-offer-detail');
    }


    /*
    |--------------------------------------------------------------------------
    | Methods
    |--------------------------------------------------------------------------
    | User defined methods like, register, verify or load
    */

    public function equipmentOfferDetail()
    {
        //$this->authorize('manageEquipmentOfferDetail', new Offer);
    }

    /*
    |--------------------------------------------------------------------------
    | Helper Functions
    |--------------------------------------------------------------------------
    | Class helper functions
    */
}
