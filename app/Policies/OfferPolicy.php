<?php
namespace App\Policies;

use App\Helpers\UserRoles;
use App\Models\Offer;
use App\Models\User;

class OfferPolicy
{
    public function manageOfferIndex(User $user)
    {
        return auth()->user();
    }
 
    public function manageVenueOfferList(User $user)
    {
        return $user->hasRole(UserRoles::VENUE_PROVIDER);
    }

    public function manageOfferCard(User $user,Offer $offer)
    {
        return $offer->service->user->is($user);
    }

    public function manageVenueOfferDetail(User $user,Offer $offer)
    {
       return $offer->service->user->is($user);
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
     
    
    public function manageMArtistOfferList(User $user,Offer $offer)
    {
        // logic
    }
    
    public function manageOfferAcceptDecline(User $user,Offer $offer)
    {
        return $offer->service->user->is($user);
    }

    public function managePayableServiceCard(User $user,Offer $offer)
    {
       return  $offer->user_id == $user->id;
    }

    public function managePayableServiceUserDetail(User $user,Offer $offer)
    {
       return  $offer->user_id == $user->id;
    }
    public function managePayableServicePaymentMethod(User $user,Offer $offer)
    {
       return  $offer->user_id == $user->id;
    }
    
    public function manageEquipmentOfferList(User $user,Offer $offer)
    {
        // logic
    }
    
    public function manageEquipmentOfferDetail(User $user,Offer $offer)
    {
        // logic
    }
    
    public function manageFSupplierOfferList(User $user,Offer $offer)
    {
        // logic
    }
    //Next-Slot
}