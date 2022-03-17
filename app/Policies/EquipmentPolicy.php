<?php
namespace App\Policies;

use App\Models\Equipment;
use App\Models\User;

class EquipmentPolicy
{
    
    public function manageIndex(User $user,Equipment $equipment)
    {
        // logic
    }
    
    public function manageCreate(User $user,Equipment $equipment)
    {
        // logic
    }
    
    public function manageEntity(User $user,Equipment $equipment)
    {
        // logic
    }
    
    public function manageGallery(User $user,Equipment $equipment)
    {
        // logic
    }
    
    public function manageSubNav(User $user,Equipment $equipment)
    {
        // logic
    }
    
    public function manageSchedule(User $user,Equipment $equipment)
    {
        // logic
    }
    
    public function managePricing(User $user,Equipment $equipment)
    {
        // logic
    }
    
    public function manageMaintainence(User $user,Equipment $equipment)
    {
        // logic
    }
    
    public function manageSettings(User $user,Equipment $equipment)
    {
        // logic
    }
    //Next-Slot
}