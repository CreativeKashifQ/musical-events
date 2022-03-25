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
    public $supplier,$foodSupplier;
    /*
    |--------------------------------------------------------------------------
    | Override Properties
    |--------------------------------------------------------------------------
    | Component properties like rules, messages
    */
    protected $rules = [
        'supplier.name' => 'required',
        'supplier.email' => 'required',
        'supplier.profile.phone' => 'required',
        'supplier.profile.gender' => 'required',
        'supplier.profile.experience' => 'required',
        'supplier.profile.address' => 'required',
        'supplier.profile.bio' => 'required',
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
        if(!$this->foodSupplier){
            $this->foodSupplier = new FoodSupplier();
            $this->foodSupplier->user_id = $supplier->id;
            $this->foodSupplier->save();
        }
        $this->authorize('manageEntity', $this->foodSupplier);
        $this->loadBasicInformation($supplier);
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

    public function update()
    {
       
        $this->authorize('manageEntity', $this->foodSupplier);
        $this->validate();
        $f_supplier = FoodSupplier::where('user_id',$this->supplier->id)->first();
        if(!$f_supplier){
            $f_supplier =  new FoodSupplier();
            $f_supplier->user_id = $this->supplier->id;
            $f_supplier->phone  = $this->supplier->profile['phone'];
            $f_supplier->experience  = $this->supplier->profile['experience'];
            $f_supplier->gender  = $this->supplier->profile['gender'];
            $f_supplier->address  = $this->supplier->profile['address'];
            $f_supplier->bio  = $this->supplier->profile['bio'];
            $f_supplier->supplier_entity_updated = true;
            $f_supplier->save();
            $this->dispatchBrowserEvent('alert',['type' =>'success','message'=>' Basic Information Saved Successfully !']);
        }else{
            $f_supplier->supplier_entity_updated = true;
            $f_supplier->save();
            $this->supplier->profile->save();
            $this->dispatchBrowserEvent('alert',['type' =>'success','message'=>' Basic Information Updated !']);
        }
        
    }

    /*
    |--------------------------------------------------------------------------
    | Helper Functions
    |--------------------------------------------------------------------------
    | Class helper functions
    */

    public function loadBasicInformation($supplier)
    {
        $this->supplier = $supplier;
        if($this->supplier){
            $this->supplier->profile;
        }
    }
}