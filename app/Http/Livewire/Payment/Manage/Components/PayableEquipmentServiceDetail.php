<?php

namespace App\Http\Livewire\Payment\Manage\Components;

use App\Models\Booking;
use App\Models\Payment;
use Livewire\Component;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class PayableEquipmentServiceDetail extends Component
{
    use AuthorizesRequests;

    /*
    |--------------------------------------------------------------------------
    | Public Data
    |--------------------------------------------------------------------------
    | This data will be visible to client. Don't instantiate any instance of a class
    | containing sensitive information
    */
    public $offer, $payable_amount;
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
        
        
        $this->offer = $offer;
        //total payable amount
        $this->payable_amount = ($offer->hours * $offer->rate);

    }

    public function render()
    {
        return view('livewire.payment.manage.components.payable-equipment-service-detail');
    }


    /*
    |--------------------------------------------------------------------------
    | Methods
    |--------------------------------------------------------------------------
    | User defined methods like, register, verify or load
    */

    public function payableEquipmentServiceDetail()
    {
      
        $booking = Booking::where('offer_id', $this->offer->id)->first();

        if (!$booking) {
            $booking = new Booking();
            $booking->user_id = $this->offer->event_host->id;
            $booking->offer_id = $this->offer->id;
            $booking->service_id = $this->offer->service_id;
            $booking->service_type = $this->offer->service_type;
            $booking->capacity = $this->offer->capacity;
            $booking->start_time = $this->offer->start_time;
            $booking->end_time = $this->offer->end_time;
            $booking->date = $this->offer->date;
            $booking->rate = $this->offer->rate;
            $booking->hours = $this->offer->hours;
            $booking->payable_amount = $this->payable_amount;
            $booking->updated_service_detail = true;
            $booking->save();
            return redirect()->route('payment.manage.user-detail', ['offer' => $this->offer]);
        }

        $booking->offer_id = $this->offer->id;
        $booking->user_id = $this->offer->event_host->id;
        $booking->service_id = $this->offer->service_id;
        $booking->service_type = $this->offer->service_type;
        $booking->capacity = $this->offer->capacity;
        $booking->start_time = $this->offer->start_time;
        $booking->end_time = $this->offer->end_time;
        $booking->date = $this->offer->date;
        $booking->rate = $this->offer->rate;
        $booking->hours = $this->offer->hours;
        $booking->payable_amount = $this->payable_amount;
        $booking->updated_service_detail = true;
        $booking->update();
        return redirect()->route('payment.manage.user-detail', ['offer' => $this->offer]);
    }

    /*
    |--------------------------------------------------------------------------
    | Helper Functions
    |--------------------------------------------------------------------------
    | Class helper functions
    */
}
