<?php
namespace App\Policies;

use App\Models\Booking;
use App\Models\User;

class BookingPolicy
{
    
    public function manageindex(User $user,Booking $booking)
    {
        // logic
    }
    
    public function managedetail(User $user,Booking $booking)
    {
        // logic
    }
    //Next-Slot
}