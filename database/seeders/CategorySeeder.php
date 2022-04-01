<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'name' => 'Studio & Recording',
                'service_type' => 'Equipment',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Live Sound',
                'service_type' => 'Equipment',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Lighting',
                'service_type' => 'Equipment',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Guitars',
                'service_type' => 'Equipment',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Bass',
                'service_type' => 'Equipment',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Drums & Percussion',
                'service_type' => 'Equipment',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Microphones',
                'service_type' => 'Equipment',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'DJ Equipment',
                'service_type' => 'Equipment',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Band & Orchestra',
                'service_type' => 'Equipment',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'Accessories',
                'service_type' => 'Equipment',
                'created_at' => now(),
                'updated_at' => now(),
            ],
          
            
        ]);
    }
}
