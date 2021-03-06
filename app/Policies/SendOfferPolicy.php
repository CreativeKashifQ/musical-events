<?php
namespace App\Policies;

use App\Models\SendOffer;
use App\Models\User;
use App\Helpers\UserRoles;

class SendOfferPolicy
{

    public function manageOfferForm(User $user,SendOffer $sendOffer)
    {

        return $user->hasRole(UserRoles::EVENT_HOST);
    }
    
    public function manageVenueOfferForm(User $user)
    {
        return $user->hasRole(UserRoles::EVENT_HOST);
    }
    
    public function manageMArtistOfferForm(User $user,SendOffer $sendOffer)
    {
        // logic
    }
    
    public function manageFSupplier(User $user,SendOffer $sendOffer)
    {
        // logic
    }
    
    public function manageFSupplierOfferForm(User $user,SendOffer $sendOffer)
    {
        // logic
    }
    
    public function manageEquipmentOfferForm(User $user,SendOffer $sendOffer)
    {
        // logic
    }
    //Next-Slot
}
