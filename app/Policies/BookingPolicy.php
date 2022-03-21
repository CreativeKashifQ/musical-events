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
    
    public function manageBookingCard(User $user,Booking $booking)
    {
        // logic
    }
    
    public function manageVenueBookingDetailCard(User $user,Booking $booking)
    {
        // logic
    }
    
    public function manageMArtistBookingDetailCard(User $user,Booking $booking)
    {
        // logic
    }
    
    public function manageVenueBookingList(User $user,Booking $booking)
    {
        // logic
    }
    
    public function manageEquipmentBookingList(User $user,Booking $booking)
    {
        // logic
    }
    
    public function manageEquipmentBookingDetailCard(User $user,Booking $booking)
    {
        // logic
    }
    
    public function manageFSupplierBookingList(User $user,Booking $booking)
    {
        // logic
    }
    
    public function manageFSupplierBookingDetailCard(User $user,Booking $booking)
    {
        // logic
    }
    //Next-Slot
}