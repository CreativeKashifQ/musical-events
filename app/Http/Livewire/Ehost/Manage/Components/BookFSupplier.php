<?php

namespace App\Http\Livewire\Ehost\Manage\Components;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Component;
use App\Models\Ehost;

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
        //$this->authorize('manageBookFSupplier', new Ehost);
    }

    public function render()
    {
        return view('livewire.ehost.manage.components.book-f-supplier');
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