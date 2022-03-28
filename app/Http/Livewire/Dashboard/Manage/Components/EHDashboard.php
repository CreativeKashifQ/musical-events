<?php

namespace App\Http\Livewire\Dashboard\Manage\Components;

use Livewire\Component;
use App\Models\Offer;
use App\Models\Booking;

class EHDashboard extends Component
{
    public function render()
    {

        $count['offers'] = Offer::where('user_id', auth()->id())->count();
        $count['bookings'] = Booking::where('user_id', auth()->id())->count();
        return view('livewire.dashboard.manage.components.e-h-dashboard',compact('count'));

    }
}
