<?php

namespace App\Http\Livewire\Ehost\Manage\Components;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Component;
use App\Models\Venue;
use App\Models\Ehost;

class BookVenue extends Component
{
    use AuthorizesRequests;

    /*
    |--------------------------------------------------------------------------
    | Public Data
    |--------------------------------------------------------------------------
    | This data will be visible to client. Don't instantiate any instance of a class
    | containing sensitive information
    */
    public $search,$count,$under_maintenance,$searchBy = 'name',$orderBy = 'desc';
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
        $this->authorize('manageBookVenue', new Ehost);
    }

    public function render()
    {
        // $venues = Venue::where([['status' ,'Active']])->whereHas('bookings',function($query){
        //     return $query;
        // })->get();
        // dd($venues);
        $venues = Venue::where([['status' ,'Active'],[$this->searchBy,'like','%'.$this->search.'%']])->orderBy('created_at',$this->orderBy)->paginate(20);
        
        return view('livewire.ehost.manage.components.book-venue',compact('venues'))->layout('layouts.cms');
    }


    /*
    |--------------------------------------------------------------------------
    | Methods
    |--------------------------------------------------------------------------
    | User defined methods like, register, verify or load
    */

    public function bookVenue()
    {
        //$this->authorize('manageBookVenue', new Ehost);
    }

    /*
    |--------------------------------------------------------------------------
    | Helper Functions
    |--------------------------------------------------------------------------
    | Class helper functions
    */
}
