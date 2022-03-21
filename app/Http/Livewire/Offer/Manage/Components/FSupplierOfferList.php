<?php

namespace App\Http\Livewire\Offer\Manage\Components;

use App\Models\Offer;
use Livewire\Component;
use App\Models\FoodSupplier;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class FSupplierOfferList extends Component
{
    use AuthorizesRequests;

    /*
    |--------------------------------------------------------------------------
    | Public Data
    |--------------------------------------------------------------------------
    | This data will be visible to client. Don't instantiate any instance of a class
    | containing sensitive information
    */
    public $search,$searchBy = 'gender',$orderBy = 'desc';
    /*
    |--------------------------------------------------------------------------
    | Override Properties
    |--------------------------------------------------------------------------
    | Component properties like rules, messages
    */
    protected $paginationTheme = 'bootstrap';
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
        //$this->authorize('manageFSupplierOfferList', new Offer);
    }

    public function render()
    {
        $fSuppliers = FoodSupplier::where('user_id',auth()->id())->with('offers')->whereHas('offers',function($query){
            return $query;
        })->where($this->searchBy,'like','%'.$this->search.'%')->orderBy('created_at',$this->orderBy)->paginate(20);
        return view('livewire.offer.manage.components.f-supplier-offer-list',compact('fSuppliers'));
    }


    /*
    |--------------------------------------------------------------------------
    | Methods
    |--------------------------------------------------------------------------
    | User defined methods like, register, verify or load
    */

    public function fSupplierOfferList()
    {
        //$this->authorize('manageFSupplierOfferList', new Offer);
    }

    /*
    |--------------------------------------------------------------------------
    | Helper Functions
    |--------------------------------------------------------------------------
    | Class helper functions
    */
}
