<?php

namespace App\Http\Livewire\Venue\Manage;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Component;
use App\Models\Venue;
use App\Models\VenueFeature;

class Feature extends Component
{
    use AuthorizesRequests;

    /*
    |--------------------------------------------------------------------------
    | Public Data
    |--------------------------------------------------------------------------
    | This data will be visible to client. Don't instantiate any instance of a class
    | containing sensitive information
    */
    public $features,$venue,$name;
    /*
    |--------------------------------------------------------------------------
    | Override Properties
    |--------------------------------------------------------------------------
    | Component properties like rules, messages
    */
    protected $rules = [
        'name' => 'required',
    ];
    /*
    |--------------------------------------------------------------------------
    | Listeners
    |--------------------------------------------------------------------------
    | Livewire event listeners like created, updated or deleted
    */
    protected $listeners = ['featureAdded','featureRemoved'];

    public function featureAdded()
    {
        $this->loadVenueFeatures($this->venue);
    }

    public function featureRemoved()
    {
        $this->loadVenueFeatures($this->venue);
    }

    /*
    |--------------------------------------------------------------------------
    | Lifecycle Hooks
    |--------------------------------------------------------------------------
    | Component hooks like hydrate, updated, render
    */

    public function mount(Venue $venue)
    {
        $this->authorize('manageFeature', $venue);
        $this->venue = $venue;
        $this->loadVenueFeatures($venue);
        
    }

    public function render()
    {
        return view('livewire.venue.manage.feature')->layout('layouts.cms');
    }


    /*
    |--------------------------------------------------------------------------
    | Methods
    |--------------------------------------------------------------------------
    | User defined methods like, register, verify or load
    */

    public function update()
    {
        $this->authorize('manageFeature', $this->venue);
        $this->validate();
        $feature = new VenueFeature();
        $feature->venue_id = $this->venue->id;
        $feature->name = $this->name;
        $feature->save();
        $this->venue->update(['feature_updated' => true]);
        $this->emtpyForm();
        $this->emit('featureAdded');
    }

    public function remove($id)
    {
       
        $feature = VenueFeature::where('id',$id)->first();
        if($feature->count()  == 1){
            $this->venue->update(['feature_updated' => false]);
            $feature->delete();
            $this->emit('featureRemoved');
        }
        $feature->delete();
        $this->emit('featureRemoved'); 
    }

    /*
    |--------------------------------------------------------------------------
    | Helper Functions
    |--------------------------------------------------------------------------
    | Class helper functions
    */
    public function loadVenueFeatures($venue)
    {
       return  $this->features = $venue->features;
    }

    public function emtpyForm()
    {
        $this->name = '';
    }
}