<?php

namespace App\Http\Livewire\Venue\Manage;

use App\Models\Venue;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Index extends Component
{
    use AuthorizesRequests, WithPagination;

    /*
    |--------------------------------------------------------------------------
    | Public Data
    |--------------------------------------------------------------------------
    | This data will be visible to client. Don't instantiate any instance of a class
    | containing sensitive information
    */
    public $search,$toggleActiveOrInActive = 'Active',$count,$searchBy = 'name',$orderBy = 'desc';
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
        $this->authorize('manageindex', new Venue);
        $this->count['Inactive'] = Venue::where([['user_id' , auth()->id()],['status' , 'Inactive']])->count();
    }

    public function render()
    {
        $venues = Venue::where([['user_id' , auth()->user()->id],['status' , $this->toggleActiveOrInActive],[$this->searchBy,'like','%'.$this->search.'%']])->orderBy('created_at',$this->orderBy)->paginate(20);
        return view('livewire.venue.manage.index', compact('venues'))->layout('layouts.cms');
    }


    /*
    |--------------------------------------------------------------------------
    | Methods
    |--------------------------------------------------------------------------
    | User defined methods like, register, verify or load
    */

    public function toggleActiveOrInActive($status)
    {
        $this->toggleActiveOrInActive = $status;
    }

    /*
    |--------------------------------------------------------------------------
    | Helper Functions
    |--------------------------------------------------------------------------
    | Class helper functions
    */
}
