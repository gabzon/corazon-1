<?php

namespace Database\Seeders;

use App\Models\Event;
use App\Models\Organization;
use App\Models\Style;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Organizations
        $obsession = Organization::where('shortname','La obsesion')->first();
        $latina = Organization::where('shortname', 'Latina')->first();
        $sf = Organization::where('name', 'Salsa de Fuego')->first();
        $aster = Organization::where('name', 'Aster')->first();
        $istriana = Organization::where('name','Salsa Latina Istriana Pula Croatia')->first();
        $zagrebpassion = Organization::where('name','Zagreb Passion Festival')->first();

        $s = Style::where('name', 'Salsa')->first();
        $son2 = Style::where('name', 'Salsa on2')->first();
        $b = Style::where('name', 'Bachata')->first();
        $sb = Style::where('name', 'Sensual Bachata')->first();
        $k = Style::where('name', 'Kizomba')->first();
        $semba = Style::where('name', 'Semba')->first();
        $t = Style::where('name','Tango')->first();

        $tronky = Event::create([
            'name'          => 'Bachata de Fuego: DJ Tronky in Zagreb!',             
            'slug'          => 'bachata-de-fuego-dj-tronky-in-zagreb',
            'type'          => 'party',
            'start_date'    => '2022-03-19 21:00:00',
            'end_date'      => '2022-03-20 02:00:00',
            'status'        => 'active',
            'facebook'      => 'https://www.facebook.com/events/198400362415277',
            'facebook_id'   => '198400362415277',
            'user_id'       => 1,
        ]);
        $tronky->styles()->attach($b->id);
        $tronky->organizations()->attach($sf->id);

        // Workshop --------------------------------------------------------------------------------

        $plesa = Event::create([
            'name'          => 'BESPLATNI DANI PLESA',
            'slug'          => 'besplatni-dani-plesa-1640946786',
            'type'          => 'workshop',
            'tagline'       => '💖 Pridruži se i probudi svoju opsesiju za plesom 💖',
            'start_date'    => '2022-01-13 20:00:00',
            'end_date'      => '2022-01-16 19:00:00',
            'status'        => 'active',
            'facebook'      => 'https://www.facebook.com/events/345221620377363',
            'facebook_id'   => '345221620377363',
            'user_id'       => 3,
        ]);
        $plesa->styles()->attach([$sb->id]);
        $plesa->organizations()->attach($obsession->id);

        $e1 = Event::create([
            'name'          => '"Dance like you" - kizomba weekend',
            'slug'          => 'dance-like-you-kizomba-weekend-with-lucas-and-ivana-1638884506',
            'type'          => 'workshop',
            'start_date'    => Carbon::now(),
            'end_date'      => Carbon::now(),
            'status'        => 'active',
            'facebook'      => 'https://www.facebook.com/events/242101221353145',
            'facebook_id'   => '242101221353145',
            'user_id'       => 1,
        ]);
        $e1->styles()->attach([$k->id]);

        $ev_latina = Event::create([
            'name'          => 'LaTina BachaKizz Weekend #1 with Soner and Kate',
            'tagline'       => 'Lady vs Man Styling',
            'slug'          => 'latina-bachakizz-weekend',
            'type'          => 'workshop',
            'start_date'    => Carbon::now(),
            'end_date'      => Carbon::now(),
            'status'        => 'active',
            'facebook'      => 'https://www.facebook.com/events/808728079623702',
            'facebook_id'   => '808728079623702',
            'user_id'       => 1,
        ]);
        $ev_latina->styles()->attach([$b->id,$k->id]);
        $ev_latina->organizations()->attach($latina->id);

        // Party --------------------------------------------------------------------------------

        $ssc = Event::create([
            'name'          => '14th anniversary Sarajevo Salsa Congress',
            'slug'          => Str::slug('14th anniversary Sarajevo Salsa Congress','-'),
            'type'          => 'festival',
            'start_date'    => Carbon::now(),
            'end_date'      => Carbon::now(),
            'status'        => 'active',
            'facebook'      => 'https://www.facebook.com/events/3013160108953104/',
            'facebook_id'   => '3013160108953104',
            'user_id'       => 1,
        ]);
        $ssc->styles()->attach([$s->id, $b->id, $k->id]);
        $ssc->organizations()->attach($aster->id);

        $stf = Event::create([
            'name'          => 'Second Sarajevo Tango Festival',             
            'slug'          => 'milonga-vikend-seminar-tango-zagreb',
            'type'          => 'festival',
            'start_date'    => Carbon::now(),
            'end_date'      => Carbon::now(),
            'status'        => 'active',
            'facebook'      => 'https://www.facebook.com/events/389389649343048',
            'facebook_id'   => '389389649343048',
            'user_id'       => 1,
        ]);
        $stf->styles()->attach($t->id);
        $stf->organizations()->attach($aster->id);

        $mariposa = Event::create([
            'name'          => 'MARIPOSA SENSUAL FESTIVAL 1st Edition',
            'slug'          => 'mariposa-sensual-festival-1st-edition-1641593646',
            'type'          => 'festival',
            'start_date'    => '2022-05-20 12:00',
            'end_date'      => '2022-05-23 12:00',
            'status'        => 'active',
            'facebook'      => 'https://www.facebook.com/events/1282356512243932/',
            'facebook_id'   => '1282356512243932',
            'user_id'       => 3,
        ]);
        $mariposa->styles()->attach([$b->id, $k->id]);

        $cuba = Event::create([
            'name'          => 'Yo vengo d cuba 2022', 
            'slug'          => 'yo-vengo-de-cuba-2022',
            'type'          => 'festival',
            'start_date'    => Carbon::now(),
            'end_date'      => Carbon::now(),
            'status'        => 'active',
            'facebook'      => 'https://www.facebook.com/events/2447996995514356',
            'facebook_id'   => '2447996995514356',
            'user_id'       => 1,
        ]);
        $cuba->styles()->attach([2,6,8]);

        $pula = Event::create([
            'name'          => '18. Salsa Latina Istriana Festival 2022',
            'slug'          => '18-salsa-latina-istriana-festival-2022-1641400548',
            'type'          => 'festival',
            'start_date'    => '2022-08-26 18:00',
            'end_date'      => '2022-08-29 05:00',
            'status'        => 'active',
            'facebook'      => 'https://www.facebook.com/events/457970608936384/',
            'facebook_id'   => '457970608936384',
            'user_id'       => 3,
        ]);
        $pula->styles()->attach([$s->id,$b->id, $k->id,$semba->id]);
        $pula->organizations()->attach($istriana->id);

        $magic = Event::create([
            'name'          => 'Magic Slovenian Salsa Festival 2022',
            'slug'          => Str::slug('Magic Slovenian Salsa Festival 2022','-'),
            'type'          => 'festival',
            'start_date'    => Carbon::now(),
            'end_date'      => Carbon::now(),
            'status'        => 'active',
            'website'       => 'https://mssf.si',
            'facebook'      => 'https://www.facebook.com/events/192596305269724',
            'facebook_id'   => '192596305269724',
            'user_id'       => 1,
        ]);        
        $magic->styles()->attach([$s->id, $son2->id]);

        $on2 = Event::create([
            'name'          => '2022 On2 salsa Congress',
            'slug'          => '2022-on2-salsa-congress',
            'type'          => 'festival',
            'start_date'    => Carbon::now(),
            'end_date'      => Carbon::now(),
            'status'        => 'active',
            'facebook'      => 'https://www.facebook.com/events/1381743148847856',
            'facebook_id'   => '1381743148847856',
            'user_id'       => 1,
        ]);
        $on2->styles()->attach([$son2->id]);

        $glam = Event::create([
            'name'          => '5th Sensual Glam Edition',
            'slug'          => '5th-sensual-glam-edition-1639507700',
            'tagline'       => 'I NEED TO DANCE, DANCE, DANCE...',
            'type'          => 'festival',
            'start_date'    => '2022-10-21 17:00',
            'end_date'      => '2022-10-24 10:00',
            'status'        => 'active',
            'facebook'      => 'https://www.facebook.com/events/2691495464480550',
            'facebook_id'   => '2691495464480550',
            'user_id'       => 3,
        ]);
        $glam->styles()->attach([$b->id,$k->id]);
        $glam->organizations()->attach($zagrebpassion->id);


// 1 'Salsa',
// 2 'Cuban salsa',
// 3 'Salsa on1', 
// 4 'Salsa on2', 
// 5 'Rueda de Casino', 
// 6 'Afro-cuban', 
// 7 'Son Cubano', 
// 8 'Rumba',
// 9 'Boogaloo', 
// 10 'Pachanga', 
// 11 'Salsa fusion', 
// 12 'Dancehall', 
// 13 'Afro-beats', 

// 14 'Hip-hop',       
// 15 'House',
// 16 'Streching', 
// 17 'Ballet', 
// 18 'Contemporary dance', 
// 19 'Tango', 
// 20 'English Waltz', 
// 21 'Viennese Waltz', 
// 22 'Foxtrot', 
// 23 'Quickstep', 
// 24 'Pasodoble', 
// 25 'pasodoble', 
// 26 'Cuban bolero', 
// 27 'Samba', 
// 28 'Ballroom rumba', 
// 29 'Cha cha cha', 
// 30 'Jive', 
// 31 'Lindy Hop', 
// 32 'Balboa', 
// 33 'Charleston', 
// 34 'Rock and roll', 
// 35 'Cumbia', 
// 36 'Merengue', 
// 37 'Bachata', 
// 38 'Reggaeton', 
// 39 'Kizomba', 
// 40 'Urban kiz', 


        // $kizz = Event::create([
        //     'name'          => 'KIZZ KISS Festival 2022', 
        //     'tagline'       => 'SAVAGE ...but Classy (Official)',
        //     'slug'          => 'kizz-kiss-festival-2022',
        //     'type'          => 'festival',
        //     'start_date'    => Carbon::now(),
        //     'end_date'      => Carbon::now(),
        //     'status'        => 'active',
        //     'facebook'      => 'https://www.facebook.com/events/976306052893368',
        //     'facebook_id'   => '976306052893368',
        //     'user_id'       => 1,
        // ]);
        // $kizz->styles()->attach([2,6,8]);

        // $rodo = Event::create([
        //     'name'          => 'RO&DO Salsa • Bachata • Kizomba Sunday',
        //     'slug'          => Str::slug('RO&DO Salsa • Bachata • Kizomba Sunday','-'),
        //     'type'          => 'party',
        //     'start_date'    => Carbon::now(),
        //     'end_date'      => Carbon::now(),
        //     'status'        => 'active',
        //     'facebook'      => 'https://www.facebook.com/events/208048078154102/',
        //     'facebook_id'   => '208048078154102',
        //     'user_id'       => 1,
        // ]);        
        // $rodo->styles()->attach([1,36,42]);

        // $bachata = Event::create([
        //     'name'          => '100% Bachata exclusive in Karlovac',
        //     'slug'          => '100-bachata-exclusive-in-karlovac-1641400332',
        //     'type'          => 'workshop',
        //     'start_date'    => '2022-01-07 20:00:00',
        //     'end_date'      => '2022-01-09 02:30:00',
        //     'status'        => 'active',
        //     'facebook'      => 'https://www.facebook.com/events/1069002453877982/',
        //     'facebook_id'   => '1069002453877982',
        //     'user_id'       => 3,
        // ]);
        // $bachata->styles()->attach([$b->id]);

        // $beast = Event::create([
        //     'name'          => 'Christmas Gala Milonga',
        //     'slug'          => Str::slug('Christmas Gala Milonga','-'),
        //     'type'          => 'party',
        //     'start_date'    => Carbon::now(),
        //     'end_date'      => Carbon::now(),
        //     'status'        => 'active',
        //     'facebook'      => 'https://www.facebook.com/events/923126548308988',
        //     'facebook_id'   => '923126548308988',
        //     'user_id'       => 1,
        // ]);        
        // $beast->styles()->attach([19]);

        // $beast = Event::create([
        //     'name'          => 'Bachata Inspire WW with Zoran & Anđela',
        //     'slug'          => Str::slug('Bachata Inspire WW with Zoran & Anđela','-'),
        //     'type'          => 'workshop',
        //     'start_date'    => Carbon::now(),
        //     'end_date'      => Carbon::now(),
        //     'status'        => 'active',
        //     'facebook'      => 'https://www.facebook.com/events/321096379461201',
        //     'facebook_id'   => '321096379461201',
        //     'user_id'       => 1,
        // ]);        
        // $beast->styles()->attach([19]);

        // $beast = Event::create([
        //     'name'          => 'LADY STYLING - Xmas Drop In',
        //     'slug'          => Str::slug('LADY STYLING - Xmas Drop In','-'),
        //     'type'          => 'workshop',
        //     'start_date'    => Carbon::now(),
        //     'end_date'      => Carbon::now(),
        //     'status'        => 'active',
        //     'facebook'      => 'https://www.facebook.com/events/565327321214117/',
        //     'facebook_id'   => '565327321214117',
        //     'user_id'       => 1,
        // ]);        
        // $beast->styles()->attach([19]);

        // $beast = Event::create([
        //     'name'          => 'Christmas Gala Party',
        //     'slug'          => Str::slug('Christmas Gala Party','-'),
        //     'type'          => 'party',
        //     'start_date'    => Carbon::now(),
        //     'end_date'      => Carbon::now(),
        //     'status'        => 'active',
        //     'facebook'      => 'https://www.facebook.com/events/1026761808174171',
        //     'facebook_id'   => '1026761808174171',
        //     'user_id'       => 1,
        // ]);        
        // $beast->styles()->attach([19]);
        
        // $beast = Event::create([
        //     'name'          => 'BOŽIČNI Dancelife PARTY',
        //     'slug'          => Str::slug('BOŽIČNI Dancelife PARTY','-'),
        //     'type'          => 'party',
        //     'start_date'    => Carbon::now(),
        //     'end_date'      => Carbon::now(),
        //     'status'        => 'active',
        //     'facebook'      => 'https://www.facebook.com/events/924402661337158/',
        //     'facebook_id'   => '924402661337158',
        //     'user_id'       => 1,
        // ]);        
        // $beast->styles()->attach([19]);

        // $zpf = Event::create([
        //     'name'          => '4th Zagreb Passion Festival 2021',
        //     'slug'          => 'zagreb-passion-festival-2021',                                                            
        //     'video'         => '<iframe width="560" height="315" src="https://www.youtube.com/embed/7q1_jxvcDbs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',            
        //     'type'          => 'festival',
        //     'status'        => 'active',    
        //     'start_date'    => Carbon::now()->addDay(rand(0,3)),                                            
        //     'end_date'      => Carbon::now()->addDay(rand(3,5)),
        //     'user_id'       => 1,
        //     'website'       => 'https://zagrebpassion.net',
        //     'facebook'      => 'https://www.facebook.com/events/2097873480505114/',            
        //     'description'   => '',
        //     'facebook_id'   => '2097873480505114',
        //     'location_id'   => 7,
        // ]);
        // $zpf->styles()->attach([36]);
        
        // $rdc = Event::create([
        //     'name'          => 'Rueda de Casino početni tečaj',
        //     'slug'          => 'rueda-de-casino-početni-tečaj',
        //     'start_date'    => Carbon::now()->addDay(rand(0,3)),
        //     'end_date'      => Carbon::now()->addDay(rand(3,5)),
        //     'type'          => 'workshop',
        //     'status'        => 'active',
        //     'facebook'      => 'https://www.facebook.com/events/608665280289818',
        //     'facebook_id'   => '608665280289818',
        //     'city_id'       => 10,
        //     'user_id'       => 1,
        // ]);
        // $rdc->styles()->attach([5]);

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

        // $all = Event::create([
        //     'name'          => 'All stars Festival 2021',
        //     'slug'          => 'all-stars-festival-2021',
        //     'type'          => 'festival',
        //     'start_date'    => Carbon::now(),
        //     'end_date'      => Carbon::now(),
        //     'status'        => 'active',
        //     'facebook'      => 'https://www.facebook.com/events/2420505851610776',
        //     'facebook_id'   => '2420505851610776',
        //     'user_id'       => 1,
        // ]);
        // $all->styles()->attach([1,36,42]);

        // $fever = Event::create([
        //     'name'          => 'Salsa radionice by Hrvoje Kraševac', 
            
        //     'slug'          => 'Salsa radionice by Hrvoje Kraševac',
        //     'type'          => 'workshop',
        //     'start_date'    => Carbon::now(),
        //     'end_date'      => Carbon::now(),
        //     'status'        => 'active',
        //     'facebook'      => 'https://www.facebook.com/events/1329582187759539/',
        //     'facebook_id'   => '1329582187759539',
        //     'user_id'       => 1,
        // ]);
        // $fever->styles()->attach([19]);

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

        // $on2 = Event::create([
        //     'name'          => 'Tango Argentino seminari',
        //     'slug'          => 'tango-argentino-seminari',
        //     'type'          => 'workshop',
        //     'start_date'    => Carbon::now(),
        //     'end_date'      => Carbon::now(),
        //     'status'        => 'active',
        //     'facebook'      => 'https://www.facebook.com/events/383100130158336',
        //     'facebook_id'   => '383100130158336',
        //     'user_id'       => 1,
        // ]);
        // $on2->styles()->attach([19]);
    }
}