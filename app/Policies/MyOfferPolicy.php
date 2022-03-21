<?php
namespace App\Policies;

use App\Models\MyOffer;
use App\Models\User;

class MyOfferPolicy
{
    
    public function manageSentOffer(User $user,MyOffer $myOffer)
    {
        // logic
    }
    
    public function manageSubNav(User $user,MyOffer $myOffer)
    {
        // logic
    }
    
    public function manageMyVenueOffers(User $user,MyOffer $myOffer)
    {
        // logic
    }
    
    public function manageMyMArtistOffers(User $user,MyOffer $myOffer)
    {
        // logic
    }
    
    public function manageMyEquipmentOffers(User $user,MyOffer $myOffer)
    {
        // logic
    }
    
    public function manageMyFSupplierOffers(User $user,MyOffer $myOffer)
    {
        // logic
    }
    //Next-Slot
}