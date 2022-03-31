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
    public $supplier,$foodSupplier,$foods,$selectedFoodTypes = [];
    /*
    |--------------------------------------------------------------------------
    | Override Properties
    |--------------------------------------------------------------------------
    | Component properties like rules, messages
    */
    protected $rules = [
        'supplier.name' => 'required',
        'supplier.email' => 'required',
        'supplier.profile.business_name' => 'required',
        'supplier.profile.business_email' => 'required',
        'supplier.profile.type' => 'required',
        'selectedFoodTypes' => 'required',
        'supplier.profile.phone' => 'required',
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
        $this->loadFoodTypes();
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
        $this->fSupplier = FoodSupplier::where('user_id',auth()->user()->id)->first();
        if(!$this->fSupplier){
            $this->fSupplier =  new FoodSupplier();
            $this->fSupplier->user_id = $this->supplier->id;
            $this->fSupplier->user_id = $this->supplier->id;
            $this->fSupplier->phone  = $this->supplier->profile['phone'];
            $this->fSupplier->experience  = $this->supplier->profile['experience'];
            $this->fSupplier->food_types =  implode(',',$this->selectedFoodTypes);
            $this->fSupplier->address  = $this->supplier->profile['address'];
            $this->fSupplier->bio  = $this->supplier->profile['bio'];
            $this->fSupplier->supplier_entity_updated = true;
            $this->fSupplier->save();
            $this->dispatchBrowserEvent('alert',['type' =>'success','message'=>' Basic Information Saved Successfully !']);
        }else{
             
            $this->fSupplier->supplier_entity_updated = true;
            $this->fSupplier->food_types =  implode(',',$this->selectedFoodTypes);
            $this->fSupplier->save();
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
            $this->selectedFoodTypes = explode(',',$this->supplier->profile->food_types);
            $this->supplier->profile;
        }
    }

    public function loadFoodTypes()
    {
        $this->foods = [
            ['id' => 1 , 'name' => 'French'],
            ['id' => 2 , 'name' => 'Chinese'],
            ['id' => 3 , 'name' => 'American'],
            ['id' => 4 , 'name' => 'Mexican'],
            ['id' => 5 , 'name' => 'Japanese'],
            ['id' => 6 , 'name' => 'Indian'],
            ['id' => 7 , 'name' => 'Israeli'],
            ['id' => 8 , 'name' => 'Italian'],
            ['id' => 9 , 'name' => 'Greek'],
            ['id' => 10 , 'name' => 'Mediterranean'],
            ['id' => 11 , 'name' => 'Pakistani'],
            ['id' => 12 , 'name' => 'Lebanese'],
            ['id' => 13 , 'name' => 'Moroccan'],
            ['id' => 14 , 'name' => 'Turkish'],
            ['id' => 15 , 'name' => 'Thai'],
        ];
    }
}