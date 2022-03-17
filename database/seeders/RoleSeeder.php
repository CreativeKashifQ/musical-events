<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Traits\HasRoles;
use App\Helpers\UserRoles;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RoleSeeder extends Seeder
{
    use HasRoles;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            [
                'name' => UserRoles::SUPER_ADMIN,
                'description' => 'Super Admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => UserRoles::VENUE_PROVIDER,
                'description' => 'Venue Provider',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => UserRoles::EQUIPMENT_PROVIDER,
                'description' => 'Equipment Provider',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => UserRoles::MUSICAL_ARTIST,
                'description' => 'Musical Artist',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => UserRoles::ARTIST_MANAGER,
                'description' => 'Artist Manager',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => UserRoles::EVENT_HOST,
                'description' => 'Event Host',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => UserRoles::PROMOTER,
                'description' => 'Promoter',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => UserRoles::SPONSER,
                'description' => 'Sponser',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => UserRoles::FOOD_SUPPLIER,
                'description' => 'Food Supplier',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
