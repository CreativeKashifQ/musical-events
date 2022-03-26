<?php

namespace App\Http\Livewire\Venue\Manage;

use App\Models\Venue;
use Livewire\Component;
use App\Services\VenueService;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Create extends Component
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
        'venue.name' => 'required',
        'venue.country' => 'required',
        'venue.city' => 'required',
        'venue.location' => 'required',
        'venue.capacity' => 'required',
        'venue.description' => 'required'
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

    public function test()
    {

    }

    public function mount()
    {
        // $this->authorize('managecreate', new Venue);
        $this->venue = new Venue();
    }

    public function render()
    {
        return view('livewire.venue.manage.create')->layout('layouts.cms');
    }


    /*
    |--------------------------------------------------------------------------
    | Methods
    |--------------------------------------------------------------------------
    | User defined methods like, register, verify or load
    */

    public function create(VenueService $venueService)
    {
        $this->authorize('managecreate', new Venue);
        $this->validate();
        $venueService->addVenue($this->venue);

    }

    /*
    |--------------------------------------------------------------------------
    | Helper Functions
    |--------------------------------------------------------------------------
    | Class helper functions
    */
}
