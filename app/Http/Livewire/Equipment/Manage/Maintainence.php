<?php

namespace App\Http\Livewire\Equipment\Manage;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Component;
use App\Models\Equipment;

class Maintainence extends Component
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

    public function mount(Equipment $equipment)
    {
        //$this->authorize('manageMaintainence', new Equipment);
    }

    public function render()
    {
        return view('livewire.equipment.manage.maintainence')->layout('layouts.cms');
    }


    /*
    |--------------------------------------------------------------------------
    | Methods
    |--------------------------------------------------------------------------
    | User defined methods like, register, verify or load
    */

    public function maintainence()
    {
        //$this->authorize('manageMaintainence', new Equipment);
    }

    /*
    |--------------------------------------------------------------------------
    | Helper Functions
    |--------------------------------------------------------------------------
    | Class helper functions
    */
}
