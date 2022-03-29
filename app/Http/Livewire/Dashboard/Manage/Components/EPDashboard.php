<?php

namespace App\Http\Livewire\Dashboard\Manage\Components;

use Livewire\Component;
use App\Models\Equipment;
use App\Models\Offer;
use App\Models\Booking;

class EPDashboard extends Component
{
    public function render()
    {

      //equipments
         $count['equipments'] = Equipment::where('user_id',auth()->user()->id)->count();
        $equipments =  Equipment::where('user_id',auth()->id())->get();
    
        //bookings
        $count['bookings']  = 0 ;
        foreach($equipments as $equipment){
           $count['bookings'] += $equipment->bookings->where('service_type','Equipment')->count();
        }
        
        //unseen_bookings
        $count['unseen_bookings']  = 0 ;
        foreach($equipments as $equipment){
           $count['unseen_bookings'] += $equipment->bookings->where('is_seen',false)->where('service_type','Equipment')->count();
        }
        //offers
        $count['offers']  = 0 ;
        foreach($equipments as $equipment){
           $count['offers'] += $equipment->offers->where('service_type','Equipment')->count();
        }
        //unseen_offers
        $count['unseen_offers']  = 0 ;
        foreach($equipments as $equipment){
           $count['unseen_offers'] += $equipment->offers->where('service_type','Equipment')->where('is_seen',false)->count();
        }
       
        //under_maintenances
        $count['under_maintenances']  = 0 ;
        foreach($equipments as $equipment){
           $count['under_maintenances'] += $equipment->under_maintenances->where('service_type','Equipment')->count();
        }
        
       //InActive
        $count['InActive'] = Equipment::where('user_id', auth()->id())->where('status','Inactive')->count();
        //Total Reequi equipment
        $totalAmount = 0;
       
        foreach ($equipments as $equipment) {
           $bookings = $equipment->bookings->where('service_type', 'Equipment');
        }
        foreach ($bookings as $booking) {
           $totalAmount += $booking->payable_amount;
        }
       
       
        return view('livewire.dashboard.manage.components.e-p-dashboard',compact('count','totalAmount'));
    }
}
