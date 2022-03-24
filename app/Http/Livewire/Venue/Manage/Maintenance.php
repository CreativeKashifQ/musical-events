<?php

namespace App\Http\Livewire\Venue\Manage;

use App\Models\Venue;
use Livewire\Component;
use App\Services\VenueService;
use App\Models\UnderMaintenance;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Maintenance extends Component
{
    use AuthorizesRequests;

    /*
    |--------------------------------------------------------------------------
    | Public Data
    |--------------------------------------------------------------------------
    | This data will be visible to client. Don't instantiate any instance of a class
    | containing sensitive information
    */
    public $v_under_maintenance,$under_maintenances;

    /*
    |--------------------------------------------------------------------------
    | Override Properties
    |--------------------------------------------------------------------------
    | Component properties like rules, messages
    */
    protected $rules = [
        'v_under_maintenance.date' => 'required',
    ];

    /*
    |--------------------------------------------------------------------------
    | Listeners
    |--------------------------------------------------------------------------
    | Livewire event listeners like created, updated or deleted
    */
    protected $listeners = ['removeFromUnderMaintenance','addForUnderMaintenance'];

    public function removeFromUnderMaintenance()
    {
        $this->loadUnderMaintenanceVenues($this->venue);
    }

    public function addForUnderMaintenance()
    {
        $this->loadUnderMaintenanceVenues($this->venue);
    }
    /*
    |--------------------------------------------------------------------------
    | Lifecycle Hooks
    |--------------------------------------------------------------------------
    | Component hooks like hydrate, updated, render
    */

    public function mount(Venue $venue)
    {

        $this->authorize('managemaintenance', $venue);
        $this->venue = $venue;
        $this->loadUnderMaintenanceVenues($this->venue);

    }

    

    public function render()
    {
        return view('livewire.venue.manage.maintenance')->layout('layouts.cms');
    }


    /*
    |--------------------------------------------------------------------------
    | Methods
    |--------------------------------------------------------------------------
    | User defined methods like, register, verify or load
    */

    public function update(VenueService $venueService)
    {
        $this->authorize('managemaintenance', $this->venue);
        $this->validate();
        $this->v_under_maintenance['id']  = $this->venue->id;
        $venueService->updateMaintenance($this->v_under_maintenance);
        $this->emitSelf('addForUnderMaintenance');
        $this->emptyForm();


    }

    public function remove($id , VenueService $venueService)
    {
        $venueService->removeFromUnderMaintenance($id);
        $this->emitSelf('removeFromUnderMaintenance');

    }

  

    /*
    |--------------------------------------------------------------------------
    | Helper Functions
    |--------------------------------------------------------------------------
    | Class helper functions
    */
    public function loadUnderMaintenanceVenues($venue)
    {

       return  $this->under_maintenances = $venue->under_maintenances;
    }

    public function emptyForm()
    {
        $this->v_under_maintenance['date'] = '';
    }
}
