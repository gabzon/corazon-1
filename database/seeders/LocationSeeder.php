<?php

namespace Database\Seeders;

use App\Models\Classroom;
use App\Models\Location;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Location::create([
            'name'                  => 'Buena Vista',
            'slug'                  => 'buena-vista',
            'shortname'             => 'bv',
            'address'               => 'Savska cesta 120',
            'zip'                   => '10000',
            'neighborhood'          => 'trešnjevka',
            'phone'                 => '+385 095 973 8494',
            'video'                 => '<iframe width="100%" height="215" src="https://www.youtube.com/embed/X_YVeB6JLb0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
            'google_maps_shortlink' => 'https://goo.gl/maps/QJnEJq696DkJWKDt7',
            'google_maps'           => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2781.883646308633!2d15.955561715896785!3d45.79355871942633!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4765d71555555555%3A0xa833ef50ea5717e7!2sBuena%20Vista%20Club%20Zagreb!5e0!3m2!1sen!2shr!4v1619184594286!5m2!1sen!2shr" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
            'user_id'               => 1,
            'city_id'               => 1,
        ]);

        Location::create([
            'name'                  => 'Bandoleros',
            'slug'                  => 'bandoleros',
            'shortname'             => 'ban',
            'address'               => 'Dobojska ulica 36C',
            'address_info'          => 'kod Trešnjevačkog placa',
            'zip'                   => '10110',
            'neighborhood'          => 'Trešnjevka',
            'google_maps_shortlink' => 'https://goo.gl/maps/cop34ETkUC5UxHg47',
            'user_id'               => 1,
            'city_id'               => 1,
        ]);    

        Location::create([
            'name'                  => 'Salsa Fusion',
            'slug'                  => 'salsa-fusion',
            'shortname'             => 'sf',
            'address'               => 'Avenija Dubrovnik 15/25',
            'zip'                   => '10000',
            'neighborhood'          => 'Novi Zagreb',
            'google_maps_shortlink' => 'https://goo.gl/maps/DYsVsz4Y5WDovsRJ9',
            'google_maps'           => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2782.572728842351!2d15.967234451467732!3d45.77975252024993!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4765d67ef7f17e9f%3A0x665653f7cea5780d!2sSalsa%20Fusion%20by%20Natasha!5e0!3m2!1sen!2shr!4v1631682331621!5m2!1sen!2shr" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
            'user_id'               => 1,
            'city_id'               => 1,
        ]);

        Location::create([
            'name'                  => 'PC Salsa',
            'slug'                  => 'pc-salsa',
            'shortname'             => 'pc',
            'address'               => 'Ul. Florijana Andrašeca 14, 10000, Zagreb',
            'zip'                   => '10000',
            'neighborhood'          => 'Trešnjevka',
            'google_maps_shortlink' => 'https://goo.gl/maps/PtGqLjR2FH47eyLa9',
            'google_maps'           => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2781.4887488178483!2d15.959086151834258!3d45.80146927900371!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4765d6ec3410ddd1%3A0xd72b0352997a6667!2sSalsa%20Dance%20Center!5e0!3m2!1sen!2shr!4v1632389038932!5m2!1sen!2shr" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
            'user_id'               => 1,
            'city_id'               => 1,
        ]);

        Location::create([
            'name'                  => 'Soss',
            'slug'                  => 'soss',
            'shortname'             => 'soss',
            'address'               => '',
            'zip'                   => '',
            'neighborhood'          => '',
            'user_id'               => 1,
            'city_id'               => 1,
        ]);

        // Location::factory(5)->create();

    }
}


