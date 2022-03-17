<?php

namespace App\Http\Livewire\Account\Consume;

use App\Models\Account;
use Livewire\Component;
use Illuminate\Support\Facades\Session;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class SelectRole extends Component
{
    use AuthorizesRequests;

    /*
    |--------------------------------------------------------------------------
    | Public Data
    |--------------------------------------------------------------------------
    | This data will be visible to client. Don't instantiate any instance of a class
    | containing sensitive information
    */
    public $selectedRoles = [];
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

    public function mount()
    {
        $this->selectedRoles = Session::has('roles') ? Session::get('roles') : [];
    }

    public function render()
    {

        return view('livewire.account.consume.select-role')->layout('layouts.cms');
    }


    /*
    |--------------------------------------------------------------------------
    | Methods
    |--------------------------------------------------------------------------
    | User defined methods like, register, verify or load
    */

    public function attemptSelectedRoles()
    {
        if($this->selectedRoles != null){
            Session::put('roles',$this->selectedRoles);
            return redirect()->route('account.consume.register');
        }else{
            $this->dispatchBrowserEvent('alert',['type' => 'error','message'=> 'Choose any role before continue!']);
        }

    }

    /*
    |--------------------------------------------------------------------------
    | Helper Functions
    |--------------------------------------------------------------------------
    | Class helper functions
    */
}
