<?php

namespace App\Http\Livewire\FoodSupplier\Manage;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Component;
use App\Models\FoodSupplier;
use App\Models\User;


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
    public $supplier,$foodSupplier;
    /*
    |--------------------------------------------------------------------------
    | Override Properties
    |--------------------------------------------------------------------------
    | Component properties like rules, messages
    */
    protected $rules = [
        'supplier.profile.opening_time' => 'required',
        'supplier.profile.closing_time' => 'required',
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
        $this->foodSupplier = FoodSupplier::where('user_id',$supplier->id)->first();
        $this->authorize('manageSchedule', $this->foodSupplier);
        $this->supplier = $supplier;
        $this->loadSchedule($supplier);
    }

    public function render()
    {
        return view('livewire.food-supplier.manage.schedule')->layout('layouts.cms');
    }


    /*
    |--------------------------------------------------------------------------
    | Methods
    |--------------------------------------------------------------------------
    | User defined methods like, register, verify or load
    */

    public function update()
    {
        $this->authorize('manageSchedule', $this->foodSupplier);
        $this->validate();
        $this->supplier->profile->save();
        $this->supplier->profile->supplier_schedule_updated = true;
        $this->supplier->profile->save();
        $this->dispatchBrowserEvent('alert',['type' =>'success','message'=>'Schedule Changes Updated !']);
    }
    

    /*
    |--------------------------------------------------------------------------
    | Helper Functions
    |--------------------------------------------------------------------------
    | Class helper functions
    */
    public function loadSchedule($supplier)
    {
        $this->supplier = $supplier;
        if($this->supplier){
            $this->supplier->profile;
        }
        
    }
}