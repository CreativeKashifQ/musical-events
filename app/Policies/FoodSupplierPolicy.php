<?php
namespace App\Policies;

use App\Models\FoodSupplier;
use App\Models\User;

class FoodSupplierPolicy
{
    
    public function manageProfile(User $user,FoodSupplier $foodSupplier)
    {
        // logic
    }
    
    public function manageEntity(User $user,FoodSupplier $foodSupplier)
    {
        // logic
    }
    
    public function manageSubNav(User $user,FoodSupplier $foodSupplier)
    {
        // logic
    }
    
    public function manageMenu(User $user,FoodSupplier $foodSupplier)
    {
        // logic
    }
    
    public function manageSchedule(User $user,FoodSupplier $foodSupplier)
    {
        // logic
    }
    
    public function manageSettings(User $user,FoodSupplier $foodSupplier)
    {
        // logic
    }
    //Next-Slot
}