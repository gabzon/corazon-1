<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Organization;
use Illuminate\Database\Seeder;

class OrganizationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Organization::create([
            'name'          => 'Suavecita',
            'slug'          => 'suavecita',                                    
            'contact'       => 'Tajana Varunek',                        
            'website'       => 'http://www.suavecita.hr/wrp/',                                    
            'status'        => 'active',
            'type'          => 'school',
            'city_id'       => 1,
            'user_id'       => 1,
        ]);

        Organization::create([
            'name'          => 'Bandoleros',
            'slug'          => 'bandoleros',                                    
            'contact'       => 'Hrvoje',                                    
            'status'        => 'active',
            'type'          => 'school',
            'city_id'       => 1,
            'user_id'       => 1,
        ]);

        Organization::create([
            'name'          => 'Salsa Fusion by Nataša',
            'slug'          => 'salsa-fusion-by-natasa',                                    
            'contact'       => 'Nataša',                                    
            'status'        => 'active',
            'type'          => 'school',
            'city_id'       => 1,
            'user_id'       => 1,
        ]);

        Organization::create([
            'name'          => 'Tango Zagreb',
            'slug'          => 'tango-zagreb',                                    
            'contact'       => 'Oski',                                    
            'status'        => 'active',
            'type'          => 'school',
            'city_id'       => 1,
            'user_id'       => 1,
        ]);

        Organization::create([
            'name'          => 'Plesni Center Fever',
            'slug'          => 'plesni-center-fever',                                    
            'contact'       => 'Hrvoje',                                    
            'status'        => 'active',
            'type'          => 'school',
            'city_id'       => 1,
            'user_id'       => 1,
        ]);

        Organization::create([
            'name'          => 'La obsesion by Gloria',
            'slug'          => 'gloria',                                    
            'contact'       => 'Gloria',                                    
            'status'        => 'active',
            'type'          => 'school',
            'city_id'       => 1,
            'user_id'       => 1,
        ]);

        Organization::create([
            'name'          => 'Bachata inspired',
            'slug'          => 'bachata-inspired',                                    
            'contact'       => 'Roberto Mesir',                                    
            'status'        => 'active',
            'type'          => 'school',
            'city_id'       => 1,
            'user_id'       => 1,
        ]);

        Organization::create([
            'name'          => 'Tormenta latina',
            'slug'          => 'tormenta-latina',                                    
            'contact'       => 'Larissa',                                    
            'status'        => 'active',
            'type'          => 'school',
            'city_id'       => 4,
            'user_id'       => 1,
        ]);

        Organization::create([
            'name'          => 'Baila conmigo',
            'slug'          => 'baila-conmigo',                                    
            'contact'       => 'Jerko & Maja',                                    
            'status'        => 'active',
            'type'          => 'school',
            'city_id'       => 4,
            'user_id'       => 1,
        ]);

        Organization::create([
            'name'          => 'La negrita',
            'slug'          => 'la-negrita',                                    
            'contact'       => 'Nera y tia',                                    
            'status'        => 'active',
            'type'          => 'school',
            'city_id'       => 4,
            'user_id'       => 1,
        ]);

        Organization::create([
            'name'          => 'Buenavista',
            'slug'          => 'buenavista',                                    
            'contact'       => 'Ivan',                                    
            'status'        => 'active',
            'type'          => 'school',
            'city_id'       => 11,
            'user_id'       => 1,
        ]);

        Organization::create([
            'name'          => 'El Paso',
            'slug'          => 'el-paso',                                    
            'contact'       => 'Zoka',                                    
            'status'        => 'active',
            'type'          => 'school',
            'city_id'       => 12,
            'user_id'       => 1,
        ]);

        Organization::create([
            'name'          => 'Aster',
            'slug'          => 'aster',                                    
            'contact'       => 'Vedran',                                    
            'status'        => 'active',
            'type'          => 'school',
            'city_id'       => 12,
            'user_id'       => 1,
        ]);

        Organization::create([
            'name'          => 'Bachateame',
            'slug'          => 'bachateame',                                    
            'contact'       => 'Marko & Anita',                                    
            'status'        => 'active',
            'type'          => 'school',
            'city_id'       => 1,
            'user_id'       => 1,
        ]);

        // $city = City::all();
        // Organization::factory(5)->create([
        //     'city_id' => $city->random(1)->pluck('id')[0], 
        // ]);
    }
}
