<?php

namespace App\Http\Livewire\Equipment\Manage;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Component;
use App\Models\Equipment;

class Settings extends Component
{
    use AuthorizesRequests;

    /*
    |--------------------------------------------------------------------------
    | Public Data
    |--------------------------------------------------------------------------
    | This data will be visible to client. Don't instantiate any instance of a class
    | containing sensitive information
    */
    public $equipment;
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

    public function mount(Equipment $equipment)
    {
        $this->authorize('manageSettings', $equipment);
        $this->equipment = $equipment;
    }

    public function render()
    {
        return view('livewire.equipment.manage.settings')->layout('layouts.cms');
    }


    /*
    |--------------------------------------------------------------------------
    | Methods
    |--------------------------------------------------------------------------
    | User defined methods like, register, verify or load
    */


    public function updateStatus()
    {

        $this->authorize('manageSettings', $this->equipment);

        if (($this->equipment->gallery_updated && $this->equipment->schedule_updated) && ($this->equipment->pricing_updated)) {
            if($this->equipment->status == 'Active'){
                $this->equipment->update(['status' => 'Inactive']);
            }else{
                $this->equipment->update(['status' => 'Active']);
            }
            
        } else {
            $this->dispatchBrowserEvent('alert', ['type' => 'error', 'message' => 'Complete All Steps First !']);
        }

        
    }

    /*
    |--------------------------------------------------------------------------
    | Helper Functions
    |--------------------------------------------------------------------------
    | Class helper functions
    */
}
