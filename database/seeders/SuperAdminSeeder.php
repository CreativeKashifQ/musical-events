<?php

namespace Database\Seeders;

use App\Models\User;
use App\Traits\HasRoles;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class SuperAdminSeeder extends Seeder
{
    use HasRoles;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Super Admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('secret123'),
        ]);

        DB::table('role_user')->insert([
            'role_id' => 1,
            'user_id' => $user->id,
            'created_at' => now(),
            'updated_at' => now(),

        ]);
    }
}
