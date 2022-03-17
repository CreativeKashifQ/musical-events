<?php

namespace App\Http\Livewire\Venue\Manage;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Component;
use App\Models\Venue;

class Setting extends Component
{
    use AuthorizesRequests;

    /*
    |--------------------------------------------------------------------------
    | Public Data
    |--------------------------------------------------------------------------
    | This data will be visible to client. Don't instantiate any instance of a class
    | containing sensitive information
    */
    public $venue;
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

    public function mount(Venue $venue)
    {
        $this->authorize('managesetting', $venue);
        $this->venue = $venue;
    }

    public function render()
    {
        return view('livewire.venue.manage.setting')->layout('layouts.cms');
    }


    /*
    |--------------------------------------------------------------------------
    | Methods
    |--------------------------------------------------------------------------
    | User defined methods like, register, verify or load
    */

    public function updateStatus($status)
    {


        $this->authorize('managesetting', $this->venue);
        if($status == 'Active'){
            if(($this->venue->gallery_updated && $this->venue->schedule_updated) && ($this->venue->pricing_updated && $this->venue->maintenance_updated_status == 'no-required' || $this->venue->maintenance_updated_status == 'required')){
               $this->venue->update(['status' => 'Active']);
            }else{
                $this->dispatchBrowserEvent('alert',['type' =>'error','message'=>'Complete All Steps First !']);
            }
        }else{
            $this->venue->update(['status' => 'Inactive']);
        }



    }

    /*
    |--------------------------------------------------------------------------
    | Helper Functions
    |--------------------------------------------------------------------------
    | Class helper functions
    */
}
