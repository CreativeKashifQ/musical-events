<?php

namespace App\Http\Livewire\Ehost\Manage\Components;

use App\Models\Ehost;
use Livewire\Component;
use App\Models\FoodSupplier;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;


class BookFSupplier extends Component
{
    use AuthorizesRequests;

    /*
    |--------------------------------------------------------------------------
    | Public Data
    |--------------------------------------------------------------------------
    | This data will be visible to client. Don't instantiate any instance of a class
    | containing sensitive information
    */
 
    public $search,$searchBy = 'address',$orderBy = 'desc',$searchDate;
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
        $this->authorize('manageBookFSupplier', new Ehost);
    }

   

    

    public function render()
    {
      
        $fSuppliers = FoodSupplier::where([['status' ,'Active'],[$this->searchBy,'like','%'.$this->search.'%']])->orderBy('created_at',$this->orderBy)->paginate(20);
        $fSuppliers =  FoodSupplier::fetchByDate($this->searchDate,$fSuppliers);
        return view('livewire.ehost.manage.components.book-f-supplier',compact('fSuppliers'))->layout('layouts.cms');
    }


    /*
    |--------------------------------------------------------------------------
    | Methods
    |--------------------------------------------------------------------------
    | User defined methods like, register, verify or load
    */

    public function bookFSupplier()
    {
        //$this->authorize('manageBookFSupplier', new Ehost);
    }

    /*
    |--------------------------------------------------------------------------
    | Helper Functions
    |--------------------------------------------------------------------------
    | Class helper functions
    */
}
