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
            'type'                  => 'Event Hall',
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
            'type'                  => 'Dance studio',
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
            'type'                  => 'Dance studio',
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
            'type'                  => 'Dance studio',
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
            'type'                  => 'Dance studio',
            'neighborhood'          => 'Trešnjevka',
            'user_id'               => 1,
            'city_id'               => 1,
        ]);

        Location::create([
            'name'                  => 'Dance Center "Mimbao"',
            'slug'                  => 'dance-center-mimbao',
            'shortname'             => 'Mimbao',
            'address'               => 'Ul. Milana Butkovića 2',
            'address_info'          => 'Demetrin Zeleni Kutak',
            'zip'                   => '51000',
            'phone'                 => '+385977742944',
            'type'                  => 'Dance studio',
            'website'               => 'https://mimbao.hr/',
            'google_maps_shortlink' => 'https://goo.gl/maps/5i3vSX8KCUpgbfEN9',
            'google_maps'           => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2804.851545064112!2d14.428572316251026!3d45.33162017909944!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4764a1272a2b4bbf%3A0xf028dec4ff47886c!2sDance%20Center%20%22Mimbao%22!5e0!3m2!1sen!2shr!4v1634226908508!5m2!1sen!2shr" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
            'user_id'               => 1,
            'city_id'               => 10,
        ]);  
        
        Location::create([
            'name'                  => 'Hotel Academia Zagreb',
            'slug'                  => 'hotel-academia-zagreb',
            'shortname'             => 'Hotel Academia',
            'address'               => 'Ul. Ivana Tkalčića 88',            
            'zip'                   => '10000',
            'email'                 => 'prodaja@hotelacademia.hr',
            'video'                 => '<iframe src="https://player.vimeo.com/video/449207679?h=174c4cc4f1" width="100%" height="360" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
                <p><a href="https://vimeo.com/449207679">Hotel Academia - Promo</a> from <a href="https://vimeo.com/user121615904">ONOMA Studio</a> on <a href="https://vimeo.com">Vimeo</a>.</p>',
            'phone'                 => '01 4550 046',
            'type'                  => 'Hotel',
            'lat'                   => 45.81963070301338,
            'lng'                   => 15.976640646918307,
            'website'               => 'http://www.hotelacademia.hr/',
            'facebook'              => 'https://www.facebook.com/hotelacademiazagreb',
            'google_maps_shortlink' => 'https://g.page/HotelAcademiaZagreb?share',
            'google_maps'           => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2780.595688894994!2d15.974342415569398!3d45.81935507910686!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4765d7035ee6166b%3A0x43aa22f07780435d!2sHotel%20Academia%20Zagreb!5e0!3m2!1sen!2shr!4v1634309281176!5m2!1sen!2shr" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
            'user_id'               => 1,
            'city_id'               => 1,
        ]);  

    }
}


