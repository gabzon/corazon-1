<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Organization;
use App\Models\User;
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
            'website'       => 'http://www.suavecita.hr/',                                    
            'status'        => 'active',
            'type'          => 'school',
            'city_id'       => 1,
            'user_id'       => 1,
            'oid'           => '',
            'phone'         => '',
            'email'         => 'info@suavecita.hr',
            'facebook'      => 'https://www.facebook.com/dancestudiosuavecita',
            'instagram'     => 'https://www.instagram.com/suavecita.zg',
            'youtube'       => 'https://www.youtube.com/channel/UCQNyKwbT3FIs7aPrN7Nhy4w',
            'address'       => 'Savska',
            'zip'           => '10000',
            'about'         => 'Plesni studio Suavecita je plesni studio u Zagrebu kojeg vodi Tajana Varunek, koja je već odgojila mnogo generacija plesača i posljednjih 17. godina stvarala zagrebačku i hrvatsku plesnu scenu.',                                 
            'video'         => '<iframe width="560" height="315" src="https://www.youtube.com/embed/qiDKnnCdcVU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
        ]);

        // styles= Salse On2, Mambo, Lady styling

        Organization::create([
            'name'          => 'Udruga Plesača Bandoleros',
            'slug'          => 'bandoleros',                                    
            'contact'       => 'Dominik Čoja',                                    
            'status'        => 'active',
            'type'          => 'school',
            'city_id'       => 1,
            'user_id'       => 1,
            'website'       => 'https://bandoleros.hr',
            'oid'           => '47569860219',
            'phone'         => '+385 989703781',
            'email'         => 'udruga.plesaca.bandoleros@gmail.com',
            'facebook'      => 'https://www.facebook.com/upbandoleros',
            'instagram'     => 'https://www.instagram.com/udruga.plesaca.bandoleros/',
            'youtube'       => 'https://www.youtube.com/channel/UC7xtolqm794qiQMeCb7ckuA',
            'address'       => 'Dobojska ulica 36C',
            'zip'           => '10000',
            'about'         => 'skupina mladih ambicioznih ljudi iz različitih grupa plesova ( salsa, bachata, tango, standard plesovi, hip hop, brejk i još mnogo toga…). Svojim znanjem i stručnim vodstvom voljni su prenositi entuzijazam i želju za plesom na mlade i starije naraštaje. ',                                 
            'video'         => '<iframe width="560" height="315" src="https://www.youtube.com/embed/FPzu7Yvajtk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
        ]);
        // styles=Salsa, Reggaeton,Hip Hop, Dancehall Kizomba,Bachata,  

        Organization::create([
            'name'          => 'Salsa Fusion by Nataša',
            'slug'          => 'salsa-fusion-by-natasa',                                    
            'contact'       => 'Nataša Pavičević',                                    
            'status'        => 'active',
            'type'          => 'school',
            'city_id'       => 1,
            'user_id'       => 1,
            'oid'           => '',
            'website'       => 'http://www.natashafusion.com/',
            'phone'         => '+38598 518 991',
            'email'         => 'natasha.salsafusion@gmail.com',
            'facebook'      => 'https://www.facebook.com/natasha.salsafusion',
            'instagram'     => 'https://www.instagram.com/salsa.fusion.by.natasha/',
            'youtube'       => 'https://www.youtube.com/channel/UCO6iTZzO1lEqsYjNtrazvkQ',
            'address'       => 'Avenija Dubrovnik 15 – fitness centar XXL 1, paviljon 25 ',
            'zip'           => '10000',
            'about'         => 'Salsa Fusion je plesna škola čiji je cilj stvaranje kompletnih (salsa) plesača s fokusom na kvaliteti i dinamici pokreta, tehnici, muzikalnosti i improvizaciji.',                                 
            'video'         => '<iframe width="560" height="315" src="https://www.youtube.com/embed/vzYX9tmlzug" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
        ]);
        // SALSA on2, salsa IMPROVER, SALSA INTERMEDIATE i LADIES' CHOREO PROJECT, salsa fusion lab

        Organization::create([
            'name'          => 'Plesni Center Fever',
            'shortname'     => 'Fever',
            'slug'          => 'plesni-center-fever',                                    
            'contact'       => 'Hrvoje Kraševac',                                    
            'status'        => 'active',
            'type'          => 'school',
            'city_id'       => 1,
            'user_id'       => 1,
            'website'       => 'http://www.fever.hr/',
            'oid'           => '45540675193',
            'phone'         => '+385 99 233 4817',
            'email'         => 'info@fever.hr',
            'facebook'      => 'https://www.facebook.com/PlesniStudioFever',
            'instagram'     => 'plesnistudiofever',
            'youtube'       => 'https://www.youtube.com/user/PlesniStudioFever',
            'address'       => 'Ulica grada Vukovara 271 (pored restorana Casablanca)',
            'zip'           => '10000',
            'about'         => 'Tečajevi i radionice salse, društvenih plesova, bachate, cha cha cha, stylinga i body movementa',
            'video'         => '<iframe width="560" height="315" src="https://www.youtube.com/embed/bt5zaXY2PB0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
        ]);
        // salsa, bachata, kizomba, merengue, cha cha cha, standardni i latinoamerički plesovi
        
        Organization::create([
            'name'          => 'La obsesion by Gloria',
            'shortname'     => 'La obsesion',
            'slug'          => 'gloria',                                    
            'contact'       => 'Gloria Lazić',                                    
            'status'        => 'active',
            'type'          => 'school',
            'city_id'       => 1,
            'user_id'       => 1,
            'website'       => 'https://www.laobsesion.com/',
            'oid'           => '',
            'phone'         => '+385 95 562 0692',
            'email'         => 'info@laobsesion.com',
            'facebook'      => 'https://www.facebook.com/LaObsesionByGloria/',
            'instagram'     => 'https://www.instagram.com/laobsesion_bygloria/',
            'youtube'       => 'https://www.youtube.com/channel/UCc0cO57O6rxHdibASo-edMg',
            'address'       => 'Zagrebački velesajam, Paviljon 10, Fitness centar XXL 2',
            'zip'           => '10000',
            'about'         => 'Plesna škola za sve plesoljupce koji žele naučiti ili usavršiti: Bachatu, Društvene Plesove i Lady Styling ',                                 
            'video'         => '<iframe width="560" height="315" src="https://www.youtube.com/embed/-IwgxjBO6UI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
        ]);
        // Bachata, Društveni stilovi, Lady styling, poduka za mladence

        Organization::create([
            'name'          => 'Bachata inspired',
            'slug'          => 'bachata-inspired',                                    
            'contact'       => 'Roberto Mesir',                                    
            'status'        => 'active',
            'type'          => 'school',
            'city_id'       => 1,
            'user_id'       => 1,
            'website'       => 'https://bachatainspire.com/',
            'oid'           => '',
            'phone'         => '+385 91 198 7510',
            'email'         => 'bachata.inspire@gmail.com',
            'facebook'      => 'https://www.facebook.com/bachatainspire',
            'instagram'     => 'https://www.instagram.com/bachatainspire/',
            'youtube'       => 'https://www.youtube.com/channel/UCR18jDR_WCmiwUiWBt1T3Bg',
            'address'       => 'Račićeva ulica 5, Zagreb',
            'zip'           => '10000',
            'about'         => 'Plesni tečaj bachate u Zagrebu sa vizijom inspirirati dečke i cure da postanu plesači.',                                 
            'video'         => '',
        ]);
        // Bachata

        Organization::create([
            'name'          => 'PC Salsa',
            'slug'          => 'pc-salsa',                                    
            'contact'       => 'Hrvoje Žaknić',                                    
            'status'        => 'active',
            'type'          => 'school',
            'city_id'       => 1,
            'user_id'       => 1,
            'website'       => 'https://www.salsa.hr/',
            'oid'           => '90681971078',
            'phone'         => '+385 98 185 6125',
            'email'         => 'info@salsa.hr',
            'facebook'      => 'https://www.facebook.com/salsa.hr',
            'instagram'     => 'https://www.instagram.com/plesnicentarsalsa_official/',
            'youtube'       => '',
            'address'       => 'Florijana Andrijaševca 14',
            'zip'           => '10000',
            'about'         => 'Salsa tečajevi, plesne salsa radionice, privatni sati salse i bachate, plesni tulumi i isplesavanja, plesna putovanja, show nastupi, humanitarna gostovanja.',                                 
            'video'         => '<iframe width="560" height="315" src="https://www.youtube.com/embed/BdPqNJ8pUCM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
        ]);

        Organization::create([
            'name'          => 'Salsa de Fuego',
            'slug'          => 'salsa-de-fuego',                                    
            'contact'       => 'Lovro Slunjski',                                    
            'status'        => 'active',
            'type'          => 'school',
            'city_id'       => 1,
            'user_id'       => 1,
            'website'       => 'https://salsadefuego.net/',
            'oid'           => '36158873089',
            'phone'         => '+385 91 255 2200',
            'email'         => 'salsadefuego@yahoo.com',
            'facebook'      => 'https://www.facebook.com/SalsaDeFuego',
            'instagram'     => 'https://www.instagram.com/salsa.de.fuego/',
            'youtube'       => 'https://www.youtube.com/channel/UCgMCIqrnvNikbEoayf007HA',
            'address'       => 'florijana Andrijaševca 18',
            'zip'           => '10000',
            'about'         => 'Dance school and fun factory in Zagreb, Croatia! Learn to dance with us & #BeFantastic! ;)',                                 
            'video'         => '',
        ]);
        // Salsa y Bachata 

        Organization::create([
            'name'          => 'LatinaDance studio',
            'shortname'     => 'Latina',
            'slug'          => 'latinadance-studio',                                    
            'contact'       => 'Kristina',                                    
            'status'        => 'active',
            'type'          => 'school',
            'city_id'       => 1,
            'user_id'       => 1,
            'website'       => 'http://latinadancestudio.com/',
            'oid'           => '',
            'phone'         => '+385977502404',
            'email'         => 'latinadancestudio@gmail.com',
            'facebook'      => 'https://www.facebook.com/latinadancestudio/',
            'instagram'     => 'https://www.instagram.com/latinadancestudio/',
            'youtube'       => '',
            'address'       => 'Florijana Andrijaševca 14',
            'zip'           => '10000',
            'about'         => 'Professional Dance Studio where we enjoy teaching students while sharing passion of dance, knowledge and experience with everyone.',                                 
            'video'         => '',
        ]);
        // Bachata, Salsa and Kizomba

        Organization::create([
            'name'          => 'PC Nicolas',
            'slug'          => 'pc-nicolas',                                    
            'contact'       => 'Ksenija Plušćec & Nicola Quesnoit',                                    
            'status'        => 'active',
            'type'          => 'school',
            'city_id'       => 1,
            'user_id'       => 1,
            'website'       => 'https://pcz.hr/',
            'oid'           => '71381714109',
            'phone'         => '+385 1 777 9412',
            'email'         => 'info@pcz.hr',
            'facebook'      => 'https://www.facebook.com/PlesniCentarZagreb',
            'instagram'     => 'https://www.instagram.com/pczbynicolas/',
            'youtube'       => 'https://www.youtube.com/channel/UC4JS83AtpiM6WhwmfpTowPg',
            'address'       => 'Ozaljska 93',
            'zip'           => '10000',
            'about'         => 'Spojem svih tjelesnih osjetila stvaramo pravu čaroliju plesa.Vodeći se motom "Više plesa, manje stresa" pokušavamo Vam uljepšati život i u tome iskreno svakodnevno uživamo zajedno s Vama!',                                 
            'video'         => '<iframe width="560" height="315" src="https://www.youtube.com/embed/tOxi08T_Ovc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
        ]);
        // Društveni plesovi, Latin plesovi, Individualna poduka, poduka za mladence, dječja plesna igraonica, plesovi za djecu i mladež

        Organization::create([
            'name'          => 'Ivan & Sara - FeralTango',
            'slug'          => 'ivan-sara',                                    
            'contact'       => 'Sara Grdan',                                    
            'status'        => 'active',
            'type'          => 'school',
            'city_id'       => 1,
            'user_id'       => 1,
            'website'       => 'https://feral-tango.com',
            'oid'           => '',
            'phone'         => '',
            'email'         => 'feraltango@gmail.com',
            'facebook'      => 'https://www.facebook.com/ivansaraferaltango',
            'instagram'     => '',
            'youtube'       => '',
            'address'       => '',
            'zip'           => '',
            'about'         => '',                                 
            'video'         => '',
        ]);

        Organization::create([
            'name'          => 'Tango Zagreb',
            'slug'          => 'tango-zagreb',                                    
            'contact'       => 'Oski',                                    
            'status'        => 'active',
            'type'          => 'school',
            'city_id'       => 1,
            'user_id'       => 1,
            'website'       => '',
            'oid'           => '',
            'phone'         => '',
            'email'         => '',
            'facebook'      => '',
            'instagram'     => '',
            'youtube'       => '',
            'address'       => '',
            'zip'           => '',
            'about'         => '',                                 
            'video'         => '',
        ]);

        Organization::create([
            'name'          => 'School Of Street Styles',
            'shortname'     => 'Soss',
            'slug'          => 'soss', 
            'contact'       => 'Suzanna',
            'status'        => 'active',
            'type'          => 'school',
            'city_id'       => 1,
            'user_id'       => 1,
            'website'       => '',
            'oid'           => '',
            'phone'         => '',
            'email'         => '',
            'facebook'      => 'https://www.facebook.com/schoolofstreetstyles.soss/',
            'instagram'     => '',
            'youtube'       => '',
            'address'       => '',
            'zip'           => '',
            'about'         => '',                                 
            'video'         => '',
        ]);

        Organization::create([
            'name'          => 'Tormenta latina',
            'slug'          => 'tormenta-latina',                                    
            'contact'       => 'Larissa',                                    
            'status'        => 'active',
            'type'          => 'school',
            'city_id'       => 4,
            'user_id'       => 1,
            'website'       => '',
            'oid'           => '',
            'phone'         => '',
            'email'         => '',
            'facebook'      => '',
            'instagram'     => '',
            'youtube'       => '',
            'address'       => '',
            'zip'           => '',
            'about'         => '',                                 
            'video'         => '',
        ]);

        Organization::create([
            'name'          => 'Baila conmigo',
            'slug'          => 'baila-conmigo',                                    
            'contact'       => 'Jerko & Maja',                                    
            'status'        => 'active',
            'type'          => 'school',
            'city_id'       => 4,
            'user_id'       => 1,
            'website'       => '',
            'oid'           => '',
            'phone'         => '',
            'email'         => '',
            'facebook'      => '',
            'instagram'     => '',
            'youtube'       => '',
            'address'       => '',
            'zip'           => '',
            'about'         => '',                                 
            'video'         => '',
        ]);

        Organization::create([
            'name'          => 'La negrita',
            'slug'          => 'la-negrita',                                    
            'contact'       => 'Nera y tia',                                    
            'status'        => 'active',
            'type'          => 'school',
            'city_id'       => 4,
            'user_id'       => 1,
            'website'       => '',
            'oid'           => '',
            'phone'         => '',
            'email'         => '',
            'facebook'      => '',
            'instagram'     => '',
            'youtube'       => '',
            'address'       => '',
            'zip'           => '',
            'about'         => '',                                 
            'video'         => '',
        ]);

        Organization::create([
            'name'          => 'Buenavista',
            'slug'          => 'buenavista',                                    
            'contact'       => 'Ivan',                                    
            'status'        => 'active',
            'type'          => 'school',
            'city_id'       => 11,
            'user_id'       => 1,
            'website'       => '',
            'oid'           => '',
            'phone'         => '',
            'email'         => '',
            'facebook'      => '',
            'instagram'     => '',
            'youtube'       => '',
            'address'       => '',
            'zip'           => '',
            'about'         => '',                                 
            'video'         => '',
        ]);

        Organization::create([
            'name'          => 'El Paso',
            'slug'          => 'el-paso',                                    
            'contact'       => 'Zoka',                                    
            'status'        => 'active',
            'type'          => 'school',
            'city_id'       => 12,
            'user_id'       => 1,
            'website'       => '',
            'oid'           => '',
            'phone'         => '',
            'email'         => '',
            'facebook'      => '',
            'instagram'     => '',
            'youtube'       => '',
            'address'       => '',
            'zip'           => '',
            'about'         => '',                                 
            'video'         => '',
        ]);

        Organization::create([
            'name'          => 'Aster',
            'slug'          => 'aster',                                    
            'contact'       => 'Vedran',                                    
            'status'        => 'active',
            'type'          => 'school',
            'city_id'       => 12,
            'user_id'       => 1,
            'website'       => '',
            'oid'           => '',
            'phone'         => '',
            'email'         => '',
            'facebook'      => '',
            'instagram'     => '',
            'youtube'       => '',
            'address'       => '',
            'zip'           => '',
            'about'         => '',                                 
            'video'         => '',
        ]);

        Organization::create([
            'name'          => 'Bachateame',
            'slug'          => 'bachateame',                                    
            'contact'       => 'Marko & Anita',                                    
            'status'        => 'active',
            'type'          => 'school',
            'city_id'       => 1,
            'user_id'       => 1,
            'website'       => '',
            'oid'           => '',
            'phone'         => '',
            'email'         => '',
            'facebook'      => '',
            'instagram'     => '',
            'youtube'       => '',
            'address'       => '',
            'zip'           => '',
            'about'         => '',                                 
            'video'         => '',
        ]);        

        foreach (Organization::all() as $org) {
            $org->students()->saveMany(User::factory(rand(10,20))->create());
            $org->teachers()->saveMany(User::factory(rand(2,5))->create());
            $org->managers()->saveMany(User::factory(rand(1,2))->create());            
        }
    }
}