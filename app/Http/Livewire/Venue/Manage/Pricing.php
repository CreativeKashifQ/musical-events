<?php

namespace App\Http\Livewire\Venue\Manage;

use App\Models\Venue;
use Livewire\Component;
use App\Services\VenueService;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Pricing extends Component
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
        'venue.hourly_rate' => 'required'
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

    public function mount(Venue $venue)
    {
        $this->authorize('managepricing', $venue);
        $this->venue  = $venue;
    }

    public function render()
    {
        return view('livewire.venue.manage.pricing')->layout('layouts.cms');
    }


    /*
    |--------------------------------------------------------------------------
    | Methods
    |--------------------------------------------------------------------------
    | User defined methods like, register, verify or load
    */

    public function update(VenueService $venueService)
    {
        $this->authorize('managepricing',$this->venue);
        $this->validate();
        $venueService->updatePricing($this->venue);
        $this->venue->update(['pricing_updated' => true]);
        $this->dispatchBrowserEvent('alert',['type' =>'success','message'=>'Pricing Changes Updated !']);
    }

    /*
    |--------------------------------------------------------------------------
    | Helper Functions
    |--------------------------------------------------------------------------
    | Class helper functions
    */
}
