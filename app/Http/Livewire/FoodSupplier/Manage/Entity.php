<?php

namespace App\Http\Livewire\FoodSupplier\Manage;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Component;
use App\Models\FoodSupplier;
use App\Models\User;

class Entity extends Component
{
    use AuthorizesRequests;

    /*
    |--------------------------------------------------------------------------
    | Public Data
    |--------------------------------------------------------------------------
    | This data will be visible to client. Don't instantiate any instance of a class
    | containing sensitive information
    */
    public $supplier;
    /*
    |--------------------------------------------------------------------------
    | Override Properties
    |--------------------------------------------------------------------------
    | Component properties like rules, messages
    */
    protected $rules = [
        'supplier.name' => 'required',
        'supplier.email' => 'required',
        'supplier.phone' => 'required',
        'supplier.gender' => 'required',
        'supplier.experience' => 'required',
        'supplier.bio' => 'required',
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

    public function mount(User $supplier)
    {
        //$this->authorize('manageEntity', new FoodSupplier);
        $this->supplier = $supplier;
    }

    public function render()
    {
        return view('livewire.food-supplier.manage.entity')->layout('layouts.cms');
    }


    /*
    |--------------------------------------------------------------------------
    | Methods
    |--------------------------------------------------------------------------
    | User defined methods like, register, verify or load
    */

    public function entity()
    {
        //$this->authorize('manageEntity', new FoodSupplier);
    }

    /*
    |--------------------------------------------------------------------------
    | Helper Functions
    |--------------------------------------------------------------------------
    | Class helper functions
    */
}