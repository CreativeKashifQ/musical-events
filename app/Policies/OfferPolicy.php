<?php
namespace App\Policies;

use App\Models\Offer;
use App\Models\User;

class OfferPolicy
{
    
    public function manageOfferCard(User $user,Offer $offer)
    {
        // logic
    }
    
    public function manageVenueOfferList(User $user,Offer $offer)
    {
        // logic
    }
    
    public function manageVenueOfferDetail(User $user,Offer $offer)
    {
        // logic
    }
    
    public function manageMArtistOfferDetail(User $user,Offer $offer)
    {
        // logic
    }
    
    public function manageFSupplierOfferDetail(User $user,Offer $offer)
    {
        // logic
    }
    
    public function managePromoterOfferDetail(User $user,Offer $offer)
    {
        // logic
    }
    
    public function manageSponserOfferDetail(User $user,Offer $offer)
    {
        // logic
    }
    
    public function manageVendorOfferDetail(User $user,Offer $offer)
    {
        // logic
    }
    
    public function manageCard(User $user,Offer $offer)
    {
        // logic
    }
    
    public function manageOffercard(User $user,Offer $offer)
    {
        // logic
    }
    //Next-Slot
}