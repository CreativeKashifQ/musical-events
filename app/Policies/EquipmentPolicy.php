<?php
namespace App\Policies;

use App\Models\Equipment;
use App\Models\User;
use App\Helpers\UserRoles;

class EquipmentPolicy
{
   
    public function manageIndex(User $user,Equipment $equipment)
    {
        return $user->hasRole(UserRoles::EQUIPMENT_PROVIDER);
    }
    
    public function manageCreate(User $user,Equipment $equipment)
    {
         return $user->hasRole(UserRoles::EQUIPMENT_PROVIDER);
    }
    
    public function manageEntity(User $user,Equipment $equipment)
    {
        return $user->hasRole(UserRoles::EQUIPMENT_PROVIDER) &&  $equipment->user->is($user);
    }
    
    public function manageGallery(User $user,Equipment $equipment)
    {
         return $user->hasRole(UserRoles::EQUIPMENT_PROVIDER) &&  $equipment->user->is($user);
    }
    
    public function manageSubNav(User $user,Equipment $equipment)
    {
         return $user->hasRole(UserRoles::EQUIPMENT_PROVIDER) &&  $equipment->user->is($user);
    }
    
    public function manageSchedule(User $user,Equipment $equipment)
    {
         return $user->hasRole(UserRoles::EQUIPMENT_PROVIDER) &&  $equipment->user->is($user);
    }
    
    public function managePricing(User $user,Equipment $equipment)
    {
         return $user->hasRole(UserRoles::EQUIPMENT_PROVIDER) &&  $equipment->user->is($user);
    }
    
    public function manageMaintainence(User $user,Equipment $equipment)
    {
         return $user->hasRole(UserRoles::EQUIPMENT_PROVIDER) &&  $equipment->user->is($user);
    }
    
    public function manageSettings(User $user,Equipment $equipment)
    {
         return $user->hasRole(UserRoles::EQUIPMENT_PROVIDER) &&  $equipment->user->is($user);
    }
    
   
    //Next-Slot
}