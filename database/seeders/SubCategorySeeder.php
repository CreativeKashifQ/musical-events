<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        DB::table('sub_categories')->insert([
            //Studio & Rocording Category , with category_id 1
            [
                'name' => 'Audio Interfaces',
                'category_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Microphones',
                'category_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Studio Monitors',
                'category_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Studio Mixers & Control Surfaces',
                'category_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Preamps & Channel Strips',
                'category_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Signal Processing & 500 Series',
                'category_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Headphones',
                'category_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Patchbays',
                'category_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Studio Furniture',
                'category_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'Acoustic Treatment',
                'category_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'Computers',
                'category_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'iOS / iPad',
                'category_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'Pro Tools',
                'category_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'Audio Recorders',
                'category_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'Audio Players',
                'category_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'Video Equipment',
                'category_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Video Equipment',
                'category_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Live Sound & Lighting category with category_id 2
            [
                'name' => 'Microphones',
                'category_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Wireless Systems',
                'category_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Live Sound Mixers',
                'category_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'PA Systems & Speakers',
                'category_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Live Sound Monitoring',
                'category_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Power Amplifiers',
                'category_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Signal Processing & 500 Series',
                'category_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Lighting',
                'category_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Portable Racks & Cases',
                'category_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Drum Shields',
                'category_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Live Sound Accessories',
                'category_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Staging',
                'category_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Software & Plugins with category_id 3

            [
                'name' => 'DAW Software',
                'category_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Plug-ins: Virtual Instruments',
                'category_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Plug-ins: Virtual Processors',
                'category_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Notation Software',
                'category_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Mastering Software',
                'category_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'DJ Software',
                'category_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Video Editing Software',
                'category_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Instructional Software',
                'category_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Utility & Other Software',
                'category_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //For Guitars with category_id 4

            [
                'name' => 'Electric Guitars',
                'category_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Acoustic Guitars',
                'category_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Bass Guitars',
                'category_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Ukuleles',
                'category_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Folk Instruments',
                'category_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Guitar Amps',
                'category_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Guitar Pedals & Effects',
                'category_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Guitar Wireless Systems',
                'category_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Guitar Accessories',
                'category_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            
            //Base with categori_id 5

            [
                'name' => 'Bass Guitar Amps',
                'category_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Bass Guitar Pedals & Effects',
                'category_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Bass Guitar Accessories',
                'category_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Guitar Wireless Systems',
                'category_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //Keyboards & Synthesizers with category_id 6

            [
                'name' => 'Synthesizers',
                'category_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Eurorack & Modular Synthesizers',
                'category_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Pianos',
                'category_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Portable & Arranger Keyboards',
                'category_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Keyboard Workstations',
                'category_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Beat Production',
                'category_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'MIDI Controllers',
                'category_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Accordions',
                'category_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Theremins',
                'category_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Keyboard Amplifiers',
                'category_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Keyboard Accessories',
                'category_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
           
            //Drum & Percussion with category_id 7
            [
                'name' => 'Acoustic Drums',
                'category_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Electronic Drums',
                'category_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Drum Hardware',
                'category_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Cymbals',
                'category_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Hand Drums',
                'category_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'World Percussion',
                'category_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Percussion Stomp Boxes',
                'category_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Drum & Percussion Accessories',
                'category_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            
            //Microphones with category_id 8

            [
                'name' => 'Condenser Microphones',
                'category_id' => 8,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Dynamic Microphones',
                'category_id' => 8,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Wireless Systems',
                'category_id' => 8,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Ribbon Microphones',
                'category_id' => 8,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Drum Microphone Bundles',
                'category_id' => 8,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Headset Microphones',
                'category_id' => 8,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Lavalier Microphones',
                'category_id' => 8,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'USB Microphones',
                'category_id' => 8,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Shotgun Microphones',
                'category_id' => 8,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'iPad/iPhone Microphones',
                'category_id' => 8,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Camera Microphones',
                'category_id' => 8,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => ' Microphone Accessories',
                'category_id' => 8,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //DJ Equipment with category_id 9
            [
                'name' => 'DJ Controllers',
                'category_id' => 9,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'DJ Mixers',
                'category_id' => 9,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'DJ Media Players',
                'category_id' => 9,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Turntables & Accessories',
                'category_id' => 9,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'MIDI Controllers',
                'category_id' => 9,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Beat Production',
                'category_id' => 9,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'DJ Effects',
                'category_id' => 9,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'DJ Headphones',
                'category_id' => 9,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Lighting',
                'category_id' => 9,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'PA Systems & Speakers',
                'category_id' => 9,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'DJ Accessories',
                'category_id' => 9,
                'created_at' => now(),
                'updated_at' => now(),
            ],
           
            //Gand & Ochestra with category_id 10

            [
                'name' => 'Woodwind Instruments',
                'category_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Brass Instruments',
                'category_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Orchestral String Instruments',
                'category_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Concert Percussion',
                'category_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Marching Percussion',
                'category_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            
            //Accessories with gategory_id

            [
                'name' => 'Cables',
                'category_id' => 11,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Snakes',
                'category_id' => 11,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Stands',
                'category_id' => 11,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Cases',
                'category_id' => 11,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Guitar Accessories',
                'category_id' => 11,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Drum & Percussion Accessories',
                'category_id' => 11,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Keyboard Accessories',
                'category_id' => 11,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Clothing & Merch',
                'category_id' => 11,
                'created_at' => now(),
                'updated_at' => now(),
            ],   
        ]);
    }
}
