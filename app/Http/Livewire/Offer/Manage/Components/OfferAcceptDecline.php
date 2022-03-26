<?php

namespace App\Http\Livewire\Offer\Manage\Components;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Component;
use App\Models\Offer;

class OfferAcceptDecline extends Component
{
    use AuthorizesRequests;

    /*
    |--------------------------------------------------------------------------
    | Public Data
    |--------------------------------------------------------------------------
    | This data will be visible to client. Don't instantiate any instance of a class
    | containing sensitive information
    */
    public $offer, $toggleAccept = false, $toggleDecline = false, $accept_remarks, $decline_remarks, $ask_amount;
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

    public function mount($offer)
    {
       $this->authorize('manageOfferAcceptDecline',$offer);
       $this->offer = $offer;
    }

    public function render()
    {
        return view('livewire.offer.manage.components.offer-accept-decline');
    }


    /*
    |--------------------------------------------------------------------------
    | Methods
    |--------------------------------------------------------------------------
    | User defined methods like, register, verify or load
    */

  
    public function offerDecline()
    {
        $this->authorize('manageOfferAcceptDecline',$this->offer);
        $this->offer->remarks = $this->decline_remarks;
        $this->offer->ask_amount = $this->ask_amount;
        $this->offer->status = 'declined';
        $this->offer->save();
        $this->toggleDecline = false;
        $this->emptyForm();

        //offer declined notificatin 
        $this->offer->dispatchOfferDeclinedNotification($this->offer,'decline');
        $this->emit('offerDeclined');
    }

    public function offerAccept()
    {
        $this->offer->remarks = $this->accept_remarks;
        $this->offer->status = 'accepted';
        $this->offer->save();
        $this->toggleAccept = false;
        $this->emptyForm();
        //offer accept notification 
        $this->offer->dispatchOfferAcceptNotification($this->offer,'accept');
        $this->emit('offerAccepted');
    }

    public function toggleAccept()
    {
        $this->toggleDecline = false;
        $this->toggleAccept = true;
    }

    public function toggleDecline()
    {
        $this->toggleAccept = false;
        $this->toggleDecline = true;
    }


    /*
    |--------------------------------------------------------------------------
    | Helper Functions
    |--------------------------------------------------------------------------
    | Class helper functions
    */
    public function emptyForm()
    {
        $this->accept_remarks = '';
        $this->decline_remarks =  '';
        $this->ask_amount = '';
    }
}