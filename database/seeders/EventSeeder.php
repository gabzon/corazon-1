<?php

namespace Database\Seeders;

use App\Models\Event;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $zpf = Event::create([
            'name'          => '4th Zagreb Passion Festival 2021',
            'slug'          => 'zagreb-passion-festival-2021',                                                            
            'video'         => '<iframe width="560" height="315" src="https://www.youtube.com/embed/7q1_jxvcDbs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',            
            'type'          => 'festival',
            'status'        => 'active',    
            'start_date'    => Carbon::now(),                                            
            'user_id'       => 1,
            'website'       => 'https://zagrebpassion.net',
            'facebook'      => 'https://www.facebook.com/events/2097873480505114/',            
            'description'   => '',
            'facebook_id'   => '2097873480505114',
        ]);
        $zpf->styles()->attach([36]);
        
        $rdc = Event::create([
            'name'          => 'Rueda de Casino početni tečaj',
            'slug'          => 'rueda-de-casino-početni-tečaj',
            'start_date'    => Carbon::now(),
            'type'          => 'workshop',
            'facebook'      => 'https://www.facebook.com/events/608665280289818',
            'facebook_id'   => '608665280289818',
            'city_id'       => 10,
            'user_id'       => 1,
        ]);
        $rdc->styles()->attach([5]);

        // $rdc = Event::create([
        //     'name'          => 'Fortuna Salsa Party',
        //     'slug'          => 'fortuna-salsa-party',
        //     'start_date'    => Carbon::now(),
        //     'end_date'      => Carbon::now(),
        //     'type'          => 'party',
        //     'facebook'      => 'https://www.facebook.com/events/4556622667750653',
        //     'facebook_id'   => '4556622667750653',            
        //     'user_id'       => 1,
        // ]);
        // $rdc->styles()->attach([]);
        // $rdc->organizations()->attach([14]);

        // $big = Event::create([
        //     'name'          => 'BIG LATIN FIESTA VOL.2',
        //     'slug'          => 'big-latin-fiesta-vol2',
        //     'start_date'    => Carbon::now(),
        //     'end_date'      => Carbon::now(),
        //     'type'          => 'party',
        //     'facebook'      => 'https://www.facebook.com/events/214356154016248',
        //     'facebook_id'   => '214356154016248',            
        //     'user_id'       => 1,
        // ]);
        // $big->styles()->attach([1,36]);
        // $big->organizations()->attach([]);

        $all = Event::create([
            'name'          => 'All stars Festival 2021',
            'slug'          => 'all-stars-festival-2021',
            'type'          => 'festival',
            'start_date'    => Carbon::now(),
            'end_date'      => Carbon::now(),
            'facebook'      => 'https://www.facebook.com/events/914896189404237',
            'facebook_id'   => '914896189404237',
            'user_id'       => 1,
        ]);
        $all->styles()->attach([1,36,42]);

        $on2 = Event::create([
            'name'          => '2022 On2 salsa Congress',
            'slug'          => '2022-on2-salsa-congress',
            'type'          => 'congress',
            'start_date'    => Carbon::now(),
            'end_date'      => Carbon::now(),
            'facebook'      => 'https://www.facebook.com/events/1381743148847856',
            'facebook_id'   => '1381743148847856',
            'user_id'       => 1,
        ]);
        $on2->styles()->attach([4]);

        // $on2 = Event::create([
        //     'name'          => 'Salsa & Bachata Petak Party',
        //     'tagline'       => 'od 20 sati Sa DJ Tajči',
        //     'slug'          => 'salsa-and-bachata-petak-party',
        //     'type'          => 'party',
        //     'start_date'    => Carbon::now(),
        //     'end_date'      => Carbon::now(),
        //     'facebook'      => 'https://www.facebook.com/events/721081592622694',
        //     'facebook_id'   => '721081592622694',
        //     'user_id'       => 1,
        // ]);
        // $on2->styles()->attach([1,36]);

        $on2 = Event::create([
            'name'          => 'Tango Argentino seminari',
            'slug'          => 'tango-argentino-seminari',
            'type'          => 'workshop',
            'start_date'    => Carbon::now(),
            'end_date'      => Carbon::now(),
            'facebook'      => 'https://www.facebook.com/events/383100130158336',
            'facebook_id'   => '383100130158336',
            'user_id'       => 1,
        ]);
        $on2->styles()->attach([19]);

        $on2 = Event::create([
            'name'          => 'Special Bachata Sensual Saturday',
            'tagline'       => 'Karlovac 7hours 100% Bachata',
            'slug'          => 'special-bachata-sensual-saturday-karlovac',
            'type'          => 'workshop',
            'start_date'    => Carbon::now(),
            'end_date'      => Carbon::now(),
            'facebook'      => 'https://www.facebook.com/events/573484887198721',
            'facebook_id'   => '573484887198721',
            'user_id'       => 1,
        ]);
        $on2->styles()->attach([38]);

        $latina = Event::create([
            'name'          => 'LaTina BachaKizz Weekend #1 with Soner and Kate',
            'tagline'       => 'Lady vs Man Styling',
            'slug'          => 'latina-bachakizz-weekend',
            'type'          => 'workshop',
            'start_date'    => Carbon::now(),
            'end_date'      => Carbon::now(),
            'facebook'      => 'https://www.facebook.com/events/808728079623702',
            'facebook_id'   => '808728079623702',
            'user_id'       => 1,
        ]);
        $latina->styles()->attach([36,42]);

        $cuba = Event::create([
            'name'          => 'Yo vengo d cuba 2022', 
            'slug'          => 'yo-vengo-de-cuba-2022',
            'type'          => 'festival',
            'start_date'    => Carbon::now(),
            'end_date'      => Carbon::now(),
            'facebook'      => 'https://www.facebook.com/events/2447996995514356',
            'facebook_id'   => '2447996995514356',
            'user_id'       => 1,
        ]);
        $cuba->styles()->attach([2,6,8]);

        $beast = Event::create([
            'name'          => 'Beast your style Zadar ', 
            'tagline'       => 'kizomba weekend with Le Klaise aka The Beast',
            'slug'          => 'beast-your-style-zadar',
            'type'          => 'festival',
            'start_date'    => Carbon::now(),
            'end_date'      => Carbon::now(),
            'facebook'      => 'https://www.facebook.com/events/395323132049397',
            'facebook_id'   => '395323132049397',
            'user_id'       => 1,
        ]);
        $beast->styles()->attach([42,43]);

        $beast = Event::create([
            'name'          => 'ZENICA CUBAN WEEKEND 4', 
            // 'tagline'       => 'kizomba weekend with Le Klaise aka The Beast',
            'slug'          => 'zenica-cuban-weekend-4',
            'type'          => 'festival',
            'start_date'    => Carbon::now(),
            'end_date'      => Carbon::now(),
            'facebook'      => 'https://www.facebook.com/events/570225794315914',
            'facebook_id'   => '570225794315914',
            'user_id'       => 1,
        ]);
        $beast->styles()->attach([2,6,8]);

        $beast = Event::create([
            'name'          => 'KIZZ KISS Festival 2022', 
            'tagline'       => 'SAVAGE ...but Classy (Official)',
            'slug'          => 'kizz-kiss-festival-2022',
            'type'          => 'festival',
            'start_date'    => Carbon::now(),
            'end_date'      => Carbon::now(),
            'facebook'      => 'https://www.facebook.com/events/976306052893368',
            'facebook_id'   => '',
            'user_id'       => 1,
        ]);
        $beast->styles()->attach([2,6,8]);
    }
}








