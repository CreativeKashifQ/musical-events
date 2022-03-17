<?php
namespace App\Policies;

use App\Models\ServiceGallery;
use App\Models\User;

class ServiceGalleryPolicy
{
    
    public function manageServiceImages(User $user,ServiceGallery $serviceGallery)
    {
        // logic
    }
    //Next-Slot
}