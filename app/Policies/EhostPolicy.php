<?php
namespace App\Policies;
use App\Helpers\UserRoles;
use App\Models\Ehost;
use App\Models\User;


class EhostPolicy
{

    public function manageBookServices(User $user)
    {
        return $user->hasRole(UserRoles::EVENT_HOST);
    }

    public function manageSubNav(User $user,Ehost $ehost)
    {
        // logic
    }

    public function manageVenueProviders(User $user,Ehost $ehost)
    {
        // logic
    }

    public function manageVenueGallery(User $user,Ehost $ehost)
    {
        // logic
    }

    public function manageGallery(User $user)
    {
        return $user->hasRole(UserRoles::EVENT_HOST);
    }

    public function manageSendOffer(User $user,Ehost $ehost)
    {
        return $user->hasRole(UserRoles::EVENT_HOST);
    }

    public function manageBookService(User $user,Ehost $ehost)
    {
        return $user->hasRole(UserRoles::EVENT_HOST);
    }

    public function manageBookVenue(User $user,Ehost $ehost)
    {
        return $user->hasRole(UserRoles::EVENT_HOST);
    }

    public function manageBookMArtist(User $user,Ehost $ehost)
    {
        return $user->hasRole(UserRoles::EVENT_HOST);
    }

    public function manageBookFSupplier(User $user,Ehost $ehost)
    {
        return $user->hasRole(UserRoles::EVENT_HOST);
    }

    public function manageBookEProvider(User $user,Ehost $ehost)
    {
        return $user->hasRole(UserRoles::EVENT_HOST);
    }

    public function manageBookPromoter(User $user,Ehost $ehost)
    {
        return $user->hasRole(UserRoles::EVENT_HOST);
    }

    public function manageBookSponsers(User $user,Ehost $ehost)
    {
        return $user->hasRole(UserRoles::EVENT_HOST);
    }

    public function manageBookPromoters(User $user,Ehost $ehost)
    {
        return $user->hasRole(UserRoles::EVENT_HOST);
    }

    public function manageServiceGallery(User $user,Ehost $ehost)
    {
        return $user->hasRole(UserRoles::EVENT_HOST);
    }
    //Next-Slot
}
