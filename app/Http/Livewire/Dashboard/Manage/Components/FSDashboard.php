<?php

namespace App\Http\Livewire\Dashboard\Manage\Components;

use App\Models\FoodSupplier;
use Livewire\Component;

class FSDashboard extends Component
{
    public function render()
    {
        $fSupplier = FoodSupplier::where('user_id', auth()->id())->first();
        //bookings
        $count['bookings'] = FoodSupplier::where('user_id', auth()->id())->with('bookings')->whereHas('bookings',function($booking){
            return $booking->where('service_type','FoodSupplier')->where('status','complete');
        })->count();
        //unseen_bookings
        $count['unseen_bookings'] = FoodSupplier::where('user_id', auth()->id())->with('bookings')->whereHas('bookings',function($booking){
            return $booking->where('service_type','FoodSupplier')->where('is_seen',false)->where('status','complete');
        })->count();
        //offers
        $count['offers'] = FoodSupplier::where('user_id', auth()->id())->with('offers')->whereHas('offers',function($offer){
            return $offer->where('service_type','FoodSupplier');
        })->count();
        //unseen_offers
        $count['unseen_offers'] = FoodSupplier::where('user_id', auth()->id())->with('offers')->whereHas('offers',function($offer){
            return $offer->where('service_type','FoodSupplier')->where('is_seen',false);
        })->count();
       
        $count['InActive'] = FoodSupplier::where('user_id', auth()->id())->where('status','Inactive')->count();

        //menue count
        if($fSupplier){
            $count['menues'] = $fSupplier->menu_gallery->count();
        }else{
            $count['menues'] = 0;
        }
       //booking revenue
        $totalAmount = 0;
        if($fSupplier){
            foreach($fSupplier->bookings->where('service_type','FoodSupplier') as $booking){
                $totalAmount += $booking->payable_amount;
            }
        }
      
        return view('livewire.dashboard.manage.components.f-s-dashboard',compact('count','totalAmount'));
    }
}
