<?php

namespace App\Http\Livewire\Dashboard\Manage\Components;

use Livewire\Component;
use App\Models\Venue;

class VPDashboard extends Component
{
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
  
    public function render()
    {
        $count['venues'] = Venue::where('user_id',auth()->user()->id)->count();
        $count['bookings'] = Venue::where('user_id', auth()->id())->with('bookings')->whereHas('bookings',function($booking){
            return $booking->where('service_type','Venue');
        })->count();
        $count['under_maintenances'] = Venue::where('user_id', auth()->id())->with('under_maintenances')->whereHas('under_maintenances',function($under_maintenance){
            return $under_maintenance->where('service_type','Venue');
        })->count();
        $count['offers'] = Venue::where('user_id', auth()->id())->with('offers')->whereHas('offers',function($offer){
            return $offer->where('service_type','Venue');
        })->count();
        $count['InActive'] = Venue::where('user_id', auth()->id())->where('status','Inactive')->count();

        $bookings = Venue::where('user_id', auth()->id())->with('bookings')->whereHas('bookings',function($booking){
            return $booking->where('service_type','Vneue'); 
        })->get();
        $totalAmount = 0;
       foreach($bookings as $booking){
           $totalAmount += $booking->payable_amount;
       }
        return view('livewire.dashboard.manage.components.v-p-dashboard',compact('count','totalAmount'));
    }

    /*
    |--------------------------------------------------------------------------
    | Methods
    |--------------------------------------------------------------------------
    | User defined methods like, register, verify or load
    */


    /*
    |--------------------------------------------------------------------------
    | Helper Functions
    |--------------------------------------------------------------------------
    | Class helper functions
    */

}
