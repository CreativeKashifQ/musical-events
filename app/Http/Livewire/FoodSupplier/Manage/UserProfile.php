<?php

namespace App\Http\Livewire\FoodSupplier\Manage;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Component;
use App\Models\FoodSupplier;
use Livewire\WithFileUploads;


class UserProfile extends Component
{
    use AuthorizesRequests,WithFileUploads;

    /*
    |--------------------------------------------------------------------------
    | Public Data
    |--------------------------------------------------------------------------
    | This data will be visible to client. Don't instantiate any instance of a class
    | containing sensitive information
    */
    public $user,$avatar;
    /*
    |--------------------------------------------------------------------------
    | Override Properties
    |--------------------------------------------------------------------------
    | Component properties like rules, messages
    */
    protected $rules = [
        'avatar' => 'required|image|max:2048',
    ];
    /*
    |--------------------------------------------------------------------------
    | Listeners
    |--------------------------------------------------------------------------
    | Livewire event listeners like created, updated or deleted
    */
    protected $listeners = ['avatarUpdated'];
    public function avatarUpdated()
    {
        $this->loadAvatar();
    }
    /*
    |--------------------------------------------------------------------------
    | Lifecycle Hooks
    |--------------------------------------------------------------------------
    | Component hooks like hydrate, updated, render
    */

    public function mount()
    {
        $this->authorize('manageProfile', new FoodSupplier);
        $this->loadAvatar();
       
    }

    public function updated()
    {
        
        $f_supplier = FoodSupplier::where('user_id',$this->user->id)->first();
        if(!$f_supplier){
            $f_supplier = new FoodSupplier();
            $f_supplier->user_id = $this->user->id;
            $f_supplier->avatar = $this->avatar->store('images/avatars', 'custom');
            $f_supplier->save();
            $this->emit('avatarUpdated');
        }
        $f_supplier->avatar = $this->avatar->store('images/avatars', 'custom');
        $f_supplier->update();
        $this->emit('avatarUpdated');
    }


   

    public function render()
    {
        return view('livewire.food-supplier.manage.user-profile')->layout('layouts.cms');
    }

  


    /*
    |--------------------------------------------------------------------------
    | Methods
    |--------------------------------------------------------------------------
    | User defined methods like, register, verify or load
    */

    public function profile()
    {
        //$this->authorize('manageProfile', new FoodSupplier);
    }

  

    /*
    |--------------------------------------------------------------------------
    | Helper Functions
    |--------------------------------------------------------------------------
    | Class helper functions
    */

    public function loadAvatar()
    {
        $this->user = auth()->user();
        if($this->user->profile){
            $this->avatar = $this->user->profile->avatar;    
            
        }

      
    }
}