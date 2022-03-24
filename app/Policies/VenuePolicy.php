<?php
namespace App\Policies;

use App\Helpers\UserRoles;
use App\Models\Venue;
use App\Models\User;

class VenuePolicy
{

    public function manageindex(User $user)
    {
       return $user->hasRole(UserRoles::VENUE_PROVIDER);
    }

    public function managecreate(User $user)
    {
        return $user->hasRole(UserRoles::VENUE_PROVIDER);
    }

    public function manageentity(User $user,Venue $venue)
    {
         return $user->hasRole(UserRoles::VENUE_PROVIDER) && $venue->user->is($user);
    }

    public function managegallery(User $user,Venue $venue)
    {
        return $user->hasRole(UserRoles::VENUE_PROVIDER) && $venue->user->is($user);

        // return
        // $offer->user->is($user)
        // ||
        // $offer->venue->user->is($user);

    }

    public function manageschedule(User $user,Venue $venue)
    {
       return $user->hasRole(UserRoles::VENUE_PROVIDER) && $venue->user->is($user);
    }

    public function managepricing(User $user,Venue $venue)
    {
       return $user->hasRole(UserRoles::VENUE_PROVIDER) && $venue->user->is($user);
    }

    public function managemaintenance(User $user,Venue $venue)
    {
       return $user->hasRole(UserRoles::VENUE_PROVIDER) && $venue->user->is($user);
    }

    public function managesetting(User $user,Venue $venue)
    {
       return $user->hasRole(UserRoles::VENUE_PROVIDER) && $venue->user->is($user);
    }

    public function manageinactive(User $user,Venue $venue)
    {
       return $user->hasRole(UserRoles::VENUE_PROVIDER) && $venue->user->is($user);
    }
    //Next-Slot
}
