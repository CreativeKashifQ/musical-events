<?php

namespace App\Http\Livewire\Equipment\Manage;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Component;
use App\Models\Equipment;

class Index extends Component
{
    use AuthorizesRequests;

    /*
    |--------------------------------------------------------------------------
    | Public Data
    |--------------------------------------------------------------------------
    | This data will be visible to client. Don't instantiate any instance of a class
    | containing sensitive information
    */
    public $search, $toggleActiveOrInActive = 'Active', $count, $searchBy = 'name', $orderBy = 'desc';
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
        $this->authorize('manageIndex', new Equipment);
        
        $this->count['Inactive'] = Equipment::where([['user_id', auth()->id()], ['status', 'Inactive']])->count();
    }

    public function render()
    {
        $equipments = Equipment::where([['user_id', auth()->user()->id], ['status', $this->toggleActiveOrInActive], [$this->searchBy, 'like', '%' . $this->search . '%']])->orderBy('created_at', $this->orderBy)->paginate(20);
        return view('livewire.equipment.manage.index', compact('equipments'))->layout('layouts.cms');
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
