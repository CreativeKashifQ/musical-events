<?php
namespace App\Policies;

use App\Models\FoodSupplier;
use App\Models\User;
use App\Helpers\UserRoles;

class FoodSupplierPolicy
{
    
    public function manageProfile(User $user,FoodSupplier $foodSupplier)
    {
        return $user->hasRole(UserRoles::FOOD_SUPPLIER);
    }
    
    public function manageEntity(User $user,FoodSupplier $foodSupplier)
    {
        return $user->hasRole(UserRoles::FOOD_SUPPLIER) &&  $foodSupplier->user_id == $user->id;
    }
    
    public function manageSubNav(User $user,FoodSupplier $foodSupplier)
    {
        return $user->hasRole(UserRoles::FOOD_SUPPLIER) &&  $foodSupplier->user_id == $user->id;
    }
    
    public function manageMenu(User $user,FoodSupplier $foodSupplier)
    {
        return $user->hasRole(UserRoles::FOOD_SUPPLIER) &&  $foodSupplier->user_id == $user->id;
    }
    
    public function manageSchedule(User $user,FoodSupplier $foodSupplier)
    {
        return $user->hasRole(UserRoles::FOOD_SUPPLIER) &&  $foodSupplier->user_id == $user->id;
    }
    
    public function manageSettings(User $user,FoodSupplier $foodSupplier)
    {
        return $user->hasRole(UserRoles::FOOD_SUPPLIER) &&  $foodSupplier->user_id == $user->id;
    }
    //Next-Slot
}