<?php

namespace App\Http\Livewire\Payment\Manage;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Component;
use App\Models\Payment;
use App\Models\Booking;
use App\Models\BankCard;
use App\Models\Offer;

class PaymentMethod extends Component
{
    use AuthorizesRequests;

    /*
    |--------------------------------------------------------------------------
    | Public Data
    |--------------------------------------------------------------------------
    | This data will be visible to client. Don't instantiate any instance of a class
    | containing sensitive information
    */
    public $card,$booking;
    /*
    |--------------------------------------------------------------------------
    | Override Properties
    |--------------------------------------------------------------------------
    | Component properties like rules, messages
    */
    protected $rules = [
        'card.name' => 'required',
        'card.number' => 'required',
        'card.expiration_date' => 'required',
        'card.cvv' => 'required',
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
        $this->authorize('managePayableServicePaymentMethod',$offer);
        $this->offer = $offer;
        $this->booking = Booking::where('offer_id',$offer->id)->first();
        $this->card = BankCard::where('user_id',$offer->user_id)->first();
        if(!$this->card){
            $this->card = new BankCard();
        }

      

    }

    public function render()
    {
        return view('livewire.payment.manage.payment-method')->layout('layouts.cms');
    }


    /*
    |--------------------------------------------------------------------------
    | Methods
    |--------------------------------------------------------------------------
    | User defined methods like, register, verify or load
    */

    public function paymentMethod()
    {
        $this->validate();
        //card info updated
        $this->card->user_id = $this->offer['user_id'];
        $this->card->save();
        //booking info updated

        $this->booking->status = 'completed';
        $this->booking->updated_payment_method = true;
        $this->booking->save();

      
        $this->offer->service->save();
        return redirect()->route('my-offer.manage.sent-offer',['service'=> strtolower($this->offer->service_type)]);
    }

    /*
    |--------------------------------------------------------------------------
    | Helper Functions
    |--------------------------------------------------------------------------
    | Class helper functions
    */
}
