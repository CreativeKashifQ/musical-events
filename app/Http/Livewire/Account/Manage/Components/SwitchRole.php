<?php

namespace App\Http\Livewire\Account\Manage\Components;

use App\Models\Role;
use Livewire\Component;
use App\Helpers\UserRoles;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;

class SwitchRole extends Component
{

    /*
    |--------------------------------------------------------------------------
    | Public Data
    |--------------------------------------------------------------------------
    | This data will be visible to client. Don't instantiate any instance of a class
    | containing sensitive information
    */
    public $selectedRole;
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
    public function updated($property)
    {
        if ($this->selectedRole != null) {

            if ($this->selectedRole == 'AllRoles') {
                $this->emit('switchToAllRoleDashbaord');
            } else {
                $role = Role::where('id', $this->selectedRole)->first();
                $isValid = Auth::user()->hasRole($role->name);
                if ($isValid) {
                    auth()->user()->setActiveRole($role);
                    $this->emit('updateActiveRole', $role->name);
                } else {
                    $this->dispatchBrowserEvent('alert', ['type' => 'error', 'message' => 'Credentials not match our record']);
                }
            }
        } 
    }
    public function mount()
    {
        $this->roles =  auth()->user()->roles;
        $role = Role::where('name', auth()->user()->active_role )->first();
        if($role ){
            $this->selectedRole = $role->id;
        }else{
            $this->selectedRole = 'AllRoles';
        }
        
    }

    public function render()
    {
        
        return view('livewire.account.manage.components.switch-role');
    }


    /*
    |--------------------------------------------------------------------------
    | Methods
    |--------------------------------------------------------------------------
    | User defined methods like, register, verify or load
    */



    /*
    |--------------------------------------------------------------------------
    | Helper Functions
    |--------------------------------------------------------------------------
    | Class helper functions
    */
}
