<?php

namespace App\Http\Livewire\Dashboard\Manage\Components;

use App\Models\FoodSupplier;
use Livewire\Component;

class FSDashboard extends Component
{
    public function render()
    {
        
        $count['bookings'] = FoodSupplier::where('user_id', auth()->id())->with('bookings')->whereHas('bookings',function($booking){
            return $booking->where('service_type','FoodSupplier');;
        })->count();
        
        $count['offers'] = FoodSupplier::where('user_id', auth()->id())->with('offers')->whereHas('offers',function($offer){
            return $offer->where('service_type','FoodSupplier');
        })->count();
       
        $count['InActive'] = FoodSupplier::where('user_id', auth()->id())->where('status','Inactive')->count();
        $count['Active'] = FoodSupplier::where('user_id', auth()->id())->where('status','Active')->count();

        $bookings = FoodSupplier::where('user_id', auth()->id())->with('bookings')->whereHas('bookings',function($booking){
            return $booking->where('service_type','FoodSupplier');; 
        })->get();
        $totalAmount = 0;
       foreach($bookings as $booking){
           $totalAmount += $booking->payable_amount;
       }
        return view('livewire.dashboard.manage.components.f-s-dashboard',compact('count','totalAmount'));
    }
}
