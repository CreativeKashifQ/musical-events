<?php

namespace App\Http\Livewire\Dashboard\Manage\Components;

use Livewire\Component;
use App\Models\Equipment;

class EPDashboard extends Component
{
    public function render()
    {
        $count['equipments'] = Equipment::where('user_id',auth()->user()->id)->count();
        $count['bookings'] = Equipment::where('user_id', auth()->id())->with('bookings')->whereHas('bookings',function($booking){
            return $booking->where('service_type','Equipment');
        })->count();
        $count['under_maintenances'] = Equipment::where('user_id', auth()->id())->with('under_maintenances')->whereHas('under_maintenances',function($under_maintenance){
            return $under_maintenance->where('service_type','Equipment');
        })->count();
        $count['offers'] = Equipment::where('user_id', auth()->id())->with('offers')->whereHas('offers',function($offer){
            return $offer->where('service_type','Equipment');
        })->count();
        $count['InActive'] = Equipment::where('user_id', auth()->id())->where('status','Inactive')->count();

        $bookings = Equipment::where('user_id', auth()->id())->with('bookings')->whereHas('bookings',function($booking){
            return $booking->where('service_type','Equipment'); 
        })->get();
        $totalAmount = 0;
       foreach($bookings as $booking){
           $totalAmount += $booking->payable_amount;
       }
        return view('livewire.dashboard.manage.components.e-p-dashboard',compact('count','totalAmount'));
    }
}
