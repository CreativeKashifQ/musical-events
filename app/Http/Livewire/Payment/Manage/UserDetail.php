<?php

namespace App\Http\Livewire\Payment\Manage;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Component;
use App\Models\Payment;
use App\Models\Booking;
use App\Models\Offer;

class UserDetail extends Component
{
    use AuthorizesRequests;

    /*
    |--------------------------------------------------------------------------
    | Public Data
    |--------------------------------------------------------------------------
    | This data will be visible to client. Don't instantiate any instance of a class
    | containing sensitive information
    */
    public $offer,$user;
    /*
    |--------------------------------------------------------------------------
    | Override Properties
    |--------------------------------------------------------------------------
    | Component properties like rules, messages
    */
    protected $rules = [
        'user.user_name' => 'required',
        'user.email' => 'required',
        'user.phone' => 'required',
        'user.cnic' => 'required',
        

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

    public function mount(Offer $offer)
    {
        $this->authorize('managePayableServiceUserDetail',$offer);
        $this->offer = $offer;
        $this->user = Booking::where('offer_id',$offer->id)->first();
        $this->user->user_name = $offer->event_host->name;
        $this->user->email = $offer->event_host->email;


    }

    public function render()
    {
        return view('livewire.payment.manage.user-detail')->layout('layouts.cms');
    }


    /*
    |--------------------------------------------------------------------------
    | Methods
    |--------------------------------------------------------------------------
    | User defined methods like, register, verify or load
    */

    public function update()
    {
        $this->validate();
        $this->user->updated_user_detail = true;
        $this->user->save();
        $this->dispatchBrowserEvent('alert',['type' =>'success','message'=>'User Changes Updated !']);

    }

    public function attemptUserDetail()
    {
        $this->validate();
        $this->user->updated_user_detail = true;
        $this->user->save();
        return redirect()->route('payment.manage.payment-method',['offer'=> $this->offer]);
    }

    /*
    |--------------------------------------------------------------------------
    | Helper Functions
    |--------------------------------------------------------------------------
    | Class helper functions
    */
}
