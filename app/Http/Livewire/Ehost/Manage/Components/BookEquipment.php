<?php

namespace App\Http\Livewire\Ehost\Manage\Components;

use App\Models\Ehost;
use Livewire\Component;
use App\Models\Equipment;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class BookEquipment extends Component
{
    use AuthorizesRequests;

    /*
    |--------------------------------------------------------------------------
    | Public Data
    |--------------------------------------------------------------------------
    | This data will be visible to client. Don't instantiate any instance of a class
    | containing sensitive information
    */
    public $search,$count,$under_maintenance,$searchBy = 'name',$orderBy = 'desc',$searchDate;
    /*
    |--------------------------------------------------------------------------
    | Override Properties
    |--------------------------------------------------------------------------
    | Component properties like rules, messages
    */
    protected $rules = [
        'searchDate' => '',
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

    public function mount()
    {
        //$this->authorize('manageBookEquipment', new Ehost);
    }

    public function render()
    {
        $equipments = Equipment::with('bookings')->where([['status' ,'Active'],[$this->searchBy,'like','%'.$this->search.'%']])->orderBy('created_at',$this->orderBy)->paginate(20);
        $equipments =  Equipment::fetchByDate($this->searchDate,$equipments);
        return view('livewire.ehost.manage.components.book-equipment',compact('equipments'));
    }


    /*
    |--------------------------------------------------------------------------
    | Methods
    |--------------------------------------------------------------------------
    | User defined methods like, register, verify or load
    */

    public function bookEquipment()
    {
        //$this->authorize('manageBookEquipment', new Ehost);
    }

    /*
    |--------------------------------------------------------------------------
    | Helper Functions
    |--------------------------------------------------------------------------
    | Class helper functions
    */
}
