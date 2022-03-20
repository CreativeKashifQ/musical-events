<?php

namespace App\Http\Livewire\FoodSupplier\Manage;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Component;
use App\Models\FoodSupplier;
use App\Models\User;

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
    public $supplier,$foodSupplier;
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

    public function mount(User $supplier)
    {
        $this->foodSupplier = FoodSupplier::where('user_id',$supplier->id)->first();
        $this->authorize('manageSettings', $this->foodSupplier);
        $this->supplier = $supplier;
    }

    public function render()
    {
        return view('livewire.food-supplier.manage.settings')->layout('layouts.cms');
    }


    /*
    |--------------------------------------------------------------------------
    | Methods
    |--------------------------------------------------------------------------
    | User defined methods like, register, verify or load
    */

    public function updateStatus()
    {
        $this->authorize('manageSettings', $this->foodSupplier);

        if (($this->supplier->profile->supplier_entity_updated && $this->supplier->profile->supplier_logo_updated) && ($this->supplier->profile->supplier_schedule_updated)) {

            if ($this->supplier->profile->status == 'Active') {
                $this->supplier->profile->status = 'Inactive';
                $this->supplier->profile->save();
                return redirect()->route('food-supplier.manage.user-profile');
            }else{
                $this->supplier->profile->status = 'Active';
                $this->supplier->profile->save();
                return redirect()->route('food-supplier.manage.user-profile');
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
