<?php

namespace App\Traits;

use App\Helpers\UserRoles;

trait HasRoles {

    //////////////////////////////////////////////////////////////////////////////
    // CHECKING ROLES METHODS
    //////////////////////////////////////////////////////////////////////////////

    public function is_SuperAdmin()
    {
        return  UserRoles::SUPER_ADMIN;
    }
    public function is_VenueProvider()
    {
        return  UserRoles::VENUE_PROVIDER;
    }

    //////////////////////////////////////////////////////////////////////////////
    // SETTING ROLES METHODS
    //////////////////////////////////////////////////////////////////////////////

    public function set_SuperAdmin()
    {
        return  UserRoles::SUPER_ADMIN;
    }
    public function set_VenueProvider()
    {
        return  UserRoles::VENUE_PROVIDER;
    }


    //////////////////////////////////////////////////////////////////////////////
    // GETTING ROLES ATTRIBUTES
    //////////////////////////////////////////////////////////////////////////////
    public function getIsSuperAdminAttribute()
    {
        return $this->role == UserRoles::SUPER_ADMIN;
    }

    public function getIsVenueProviderAttribute()
    {
        return $this->role == UserRoles::VENUE_PROVIDER;
    }



}
