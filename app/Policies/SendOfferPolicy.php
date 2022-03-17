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
    
    public function manageVenueOfferForm(User $user,SendOffer $sendOffer)
    {
        // logic
    }
    
    public function manageMArtistOfferForm(User $user,SendOffer $sendOffer)
    {
        // logic
    }
    //Next-Slot
}
