<?php

namespace App\Http\Livewire\Venue\Manage;

use App\Models\Venue;
use Livewire\Component;
use App\Services\VenueService;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Schedule extends Component
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
        'venue.opening_time' => 'required',
        'venue.closing_time' => 'required',
        'venue.date' => 'required',
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

        $this->authorize('manageschedule', $venue);
        $this->venue = $venue;
    }

    public function render()
    {
        return view('livewire.venue.manage.schedule')->layout('layouts.cms');
    }


    /*
    |--------------------------------------------------------------------------
    | Methods
    |--------------------------------------------------------------------------
    | User defined methods like, register, verify or load
    */

    public function update(VenueService $venueService)
    {
        $this->authorize('manageschedule', $this->venue);
        $this->validate();
        $venueService->updateSchedule($this->venue);
        $this->venue->update(['schedule_updated' => true]);
        $this->dispatchBrowserEvent('alert',['type' =>'success','message'=>'Schedule Changes Updated !']);
    }

    /*
    |--------------------------------------------------------------------------
    | Helper Functions
    |--------------------------------------------------------------------------
    | Class helper functions
    */
}
