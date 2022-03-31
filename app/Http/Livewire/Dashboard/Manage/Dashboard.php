<?php

namespace App\Http\Livewire\Dashboard\Manage;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Component;


class Dashboard extends Component
{
    use AuthorizesRequests;

    /*
    |--------------------------------------------------------------------------
    | Public Data
    |--------------------------------------------------------------------------
    | This data will be visible to client. Don't instantiate any instance of a class
    | containing sensitive information
    */
    public $active_role;
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
    protected $listeners = ['updateActiveRole','switchToAllRoleDashbaord'];

    public function updateActiveRole($role)
    {
        $this->active_role = $role;
        
       
        
    }

    public function switchToAllRoleDashbaord()
    {
       //load this component
       $user = auth()->user();
       $user->active_role = 'AllRoles';
       $user->save();
       $this->active_role = $user->active_role;
    }
    /*
    |--------------------------------------------------------------------------
    | Lifecycle Hooks
    |--------------------------------------------------------------------------
    | Component hooks like hydrate, updated, render
    */

    public function mount()
    {
        $this->active_role = auth()->user()->active_role;
        
    }

    public function render()
    {
        return view('livewire.dashboard.manage.dashboard')->layout('layouts.cms');
    }


    /*
    |--------------------------------------------------------------------------
    | Methods
    |--------------------------------------------------------------------------
    | User defined methods like, register, verify or load
    */

    public function dashboard()
    {
    }

    /*
    |--------------------------------------------------------------------------
    | Helper Functions
    |--------------------------------------------------------------------------
    | Class helper functions
    */
}
