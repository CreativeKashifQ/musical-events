<?php
namespace App\Policies;

use App\Models\Home;
use App\Models\User;

class HomePolicy
{
    
    public function consumeWelcome(User $user,Home $home)
    {
        // logic
    }
    //Next-Slot
}