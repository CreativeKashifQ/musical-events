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
        $venues =  Venue::where('user_id',auth()->user()->id)->get();


        //venues
        $count['venues'] = Venue::where('user_id',auth()->user()->id)->count();
        //bookings
        $count['bookings']  = 0 ;
        foreach($venues as $venue){
           $count['bookings'] += $venue->bookings->where('service_type','Venue')->count();
        }
        
        //unseen_bookings
        $count['unseen_bookings']  = 0 ;
        foreach($venues as $venue){
           $count['unseen_bookings'] += $venue->bookings->where('is_seen',false)->where('service_type','Venue')->count();
        }
        //offers
        $count['offers']  = 0 ;
        foreach($venues as $venue){
           $count['offers'] += $venue->offers->where('service_type','Venue')->count();
        }
        //unseen_offers
        $count['unseen_offers']  = 0 ;
        foreach($venues as $venue){
           $count['unseen_offers'] += $venue->offers->where('service_type','Venue')->where('is_seen',false)->count();
        }
       
        //under_maintenances
        $count['under_maintenances']  = 0 ;
        foreach($venues as $venue){
           $count['under_maintenances'] += $venue->under_maintenances->where('service_type','Venue')->count();
        }
        
       //InActive
        $count['InActive'] = Venue::where('user_id', auth()->id())->where('status','Inactive')->count();
        //Total Revenue
        $bookings = Venue::where('user_id', auth()->id())->with('bookings')->whereHas('bookings',function($booking){
            return $booking->where('service_type','Venue'); 
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
