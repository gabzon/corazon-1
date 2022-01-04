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
        $su = Organization::create([
            'name'          => 'Suavecita',
            'slug'          => 'suavecita',
            'contact'       => 'Tajana Varunek',                        
            'website'       => 'http://www.suavecita.hr/',                                    
            'status'        => 'open',
            'type'          => 'school',
            'city_id'       => 1,
            'user_id'       => 1,
            'oid'           => '',
            'phone'         => '',
            'logo'          => 'images/schools/suavecita-logo.jpg',
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
        $su->addMediaFromUrl(asset('images/schools/suavecita-logo.png'))->toMediaCollection('organization-logos','public');
        $su->addMediaFromUrl(asset('images/schools/suavecita-icon.jpg'))->toMediaCollection('organization-icons','public');

        $ban = Organization::create([
            'name'          => 'Udruga Plesača Bandoleros',
            'slug'          => 'bandoleros',
            'shortname'     => 'Bandoleros',
            'contact'       => 'Dominik Čoja',
            'status'        => 'open',
            'type'          => 'school',
            'city_id'       => 1,
            'user_id'       => 1,
            'logo'          => 'images/schools/bandoleros-logo.jpg',
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
        $ban->addMediaFromUrl(asset('images/schools/bandoleros.jpeg'))->toMediaCollection('organization-logos','public');
        $ban->addMediaFromUrl(asset('images/schools/bandoleros.jpeg'))->toMediaCollection('organization-icons','public');

        $sf = Organization::create([
            'name'          => 'Salsa Fusion by Nataša',
            'slug'          => 'salsa-fusion-by-natasa',
            'shortname'     => 'Salsa Fusion',
            'contact'       => 'Nataša Pavičević',
            'status'        => 'open',
            'type'          => 'school',
            'city_id'       => 1,
            'user_id'       => 1,
            'oid'           => '',
            'logo'          => 'images/schools/salsafusion.jpg',
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

        $sf->addMediaFromUrl(asset('images/schools/salsafusion.jpg'))->toMediaCollection('organization-logos','public');
        $sf->addMediaFromUrl(asset('images/schools/salsafusion-icon.jpg'))->toMediaCollection('organization-icons','public');

        Organization::create([
            'name'          => 'Plesni Center Fever',
            'shortname'     => 'Fever',
            'slug'          => 'plesni-center-fever',                                    
            'contact'       => 'Hrvoje Kraševac',                                    
            'status'        => 'open',
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
            'address'       => 'Ulica grada Vukovara 271',
            'address_info'  => 'pored restorana Casablanca',
            'zip'           => '10000',
            'about'         => 'Tečajevi i radionice salse, društvenih plesova, bachate, cha cha cha, stylinga i body movementa',
            'video'         => '<iframe width="560" height="315" src="https://www.youtube.com/embed/bt5zaXY2PB0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
        ]);
        // salsa, bachata, kizomba, merengue, cha cha cha, standardni i latinoamerički plesovi

        $gloria =Organization::create([
            'name'          => 'La obsesion by Gloria',
            'shortname'     => 'La obsesion',
            'slug'          => 'gloria',                                    
            'contact'       => 'Gloria Lazić',                                    
            'status'        => 'open',
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
        $gloria->addMediaFromUrl(asset('images/schools/obsesion.jpg'))->toMediaCollection('organization-logos','public');
        $gloria->addMediaFromUrl(asset('images/schools/obsesion.jpg'))->toMediaCollection('organization-icons','public');

        Organization::create([
            'name'          => 'Bachata inspired',
            'slug'          => 'bachata-inspired',                                    
            'contact'       => 'Roberto Mesir',                                    
            'status'        => 'open',
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

        $pc = Organization::create([
            'name'          => 'Plesni Centar Salsa',
            'slug'          => 'pc-salsa-zagreb',
            'shortname'     => 'PC Salsa',
            'contact'       => 'Hrvoje Žaknić',                                    
            'status'        => 'open',
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
        $pc->addMediaFromUrl(asset('images/schools/pcsalsa.jpeg'))->toMediaCollection('organization-logos','public');
        $pc->addMediaFromUrl(asset('images/schools/pcsalsa.jpeg'))->toMediaCollection('organization-icons','public');

        Organization::create([
            'name'          => 'Salsa de Fuego',
            'slug'          => 'salsa-de-fuego',                                    
            'contact'       => 'Lovro Slunjski',                                    
            'status'        => 'open',
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

        $latina = Organization::create([
            'name'          => 'LatinaDance studio',
            'shortname'     => 'Latina',
            'slug'          => 'latinadance-studio',                                    
            'contact'       => 'Kristina',                                    
            'status'        => 'open',
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
            'address'       => '',
            'zip'           => '10000',
            'about'         => 'Professional Dance Studio where we enjoy teaching students while sharing passion of dance, knowledge and experience with everyone.',                                 
            'video'         => '',
        ]);
        $latina->addMediaFromUrl(asset('images/schools/latina.jpg'))->toMediaCollection('organization-logos','public');
        $latina->addMediaFromUrl(asset('images/schools/latina.jpg'))->toMediaCollection('organization-icons','public');
        // Bachata, Salsa and Kizomba

        Organization::create([
            'name'          => 'PC Nicolas',
            'slug'          => 'pc-nicolas',                                    
            'contact'       => 'Ksenija Plušćec & Nicola Quesnoit',                                    
            'status'        => 'open',
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

        $iys = Organization::create([
            'name'          => 'Ivan & Sara - FeralTango',
            'slug'          => 'ivan-sara',
            'shortname'     => 'FeralTango',
            'contact'       => 'Sara Grdan',
            'status'        => 'open',
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
        $iys->addMediaFromUrl(asset('images/schools/feral-tango.jpeg'))->toMediaCollection('organization-icons','public');
        $iys->addMediaFromUrl(asset('images/schools/feral-tango.jpeg'))->toMediaCollection('organization-logos','public');

        $tz = Organization::create([
            'name'          => 'Tango Zagreb',
            'slug'          => 'tango-zagreb',
            'shortname'     => 'Tango Zagreb',
            'contact'       => 'Oski, Ana or Tajana',                                    
            'status'        => 'open',
            'type'          => 'school',
            'city_id'       => 1,
            'user_id'       => 1,
            'website'       => 'http://www.tangoargentino.hr',
            'oid'           => '',
            'phone'         => '+385 91 48 44 520',
            'email'         => 'zagrebtango@gmail.com',
            'facebook'      => 'https://www.facebook.com/tangozagreb',
            'instagram'     => '',
            'youtube'       => '',
            'address'       => '',
            'zip'           => '',
            'about'         => 'Ako želis upisati početni tečaj argentinskog tanga, ispuni našu on-line prijavnicu, a mi ćemo te kontaktirati s detaljnim informacijama o početku tečaja.

            Ana: +385 95 80 06 714
            Tajana: +385 91 53 47 386
            Posjeti web stranicu www.tangoargentino.hr',                                 
            'video'         => '',
        ]);
        $tz->addMediaFromUrl(asset('images/schools/tango-zagreb.png'))->toMediaCollection('organization-icons','public');
        $tz->addMediaFromUrl(asset('images/schools/tango-zagreb.png'))->toMediaCollection('organization-logos','public');

        $soss = Organization::create([
            'name'          => 'School Of Street Styles',
            'shortname'     => 'Soss',
            'slug'          => 'soss', 
            'contact'       => 'Suzanna',
            'status'        => 'open',
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
        
        $soss->addMediaFromUrl(asset('images/schools/soss-icon.png'))->toMediaCollection('organization-icons','public');
        $soss->addMediaFromUrl(asset('images/schools/soss.jpg'))->toMediaCollection('organization-logos','public');

        Organization::create([
            'name'          => 'Tormenta latina',
            'slug'          => 'tormenta-latina',                                    
            'contact'       => 'Larissa',                                    
            'status'        => 'open',
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

        $nera = Organization::create([
            'name'          => 'La negrita',
            'slug'          => 'la-negrita',                                    
            'contact'       => 'Nera y tia',                                    
            'status'        => 'open',
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

        $nera->addMediaFromUrl(asset('images/schools/negrita-logo.jpg'))->toMediaCollection('organization-icons','public');
        $nera->addMediaFromUrl(asset('images/schools/negrita-logo.jpg'))->toMediaCollection('organization-logos','public');

        Organization::create([
            'name'          => 'Buenavista',
            'slug'          => 'buenavista',                                    
            'contact'       => 'Ivan',                                    
            'status'        => 'open',
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
            'status'        => 'open',
            'type'          => 'school',
            'city_id'       => 35,
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
            'status'        => 'open',
            'type'          => 'school',
            'city_id'       => 34,
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
            'status'        => 'open',
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
            'name'          => 'Plesni Studio STEP - Socijalizacija, Trening, Edukacija i Ples',
            'slug'          => 'plesni-studio-step-socijalizacija-trening-edukacija-i-ples-1636472207',
            'shortname'     => 'Studio STEP',
            'about'         => '',                                
            'status'        => 'open',
            'type'          => 'school',
            'contact'       => '',                                    
            'phone'         => '+385 91 258 1713',
            'email'         => '',
            'website'       => 'http://www.stepsplit.com/',
            'city_id'       => 4,
            'user_id'       => 1,
            'website'       => '',
            'oid'           => '',
            'facebook'      => 'https://www.facebook.com/plesnistudioSTEP',
            'instagram'     => 'https://www.instagram.com/plesnistudiostep/',
            'youtube'       => '',
            'address'       => '',
            'zip'           => '',
            'about'         => '',                                 
            'video'         => '',
        ]);

        Organization::create([
            'name'          => 'Center of Dance (Miljen)',
            'slug'          => 'center-of-dance-miljen-1636119830',
            'shortname'     => 'Center of Dance',
            'about'         => 'Centar plesa najveća je plesna udruga u Dalmaciji. Djeluje u Splitu, Solinu, Trogiru i Kaštelima. Centar plesa okuplja plesne klubove koji surađuju na promociji plesne kulture u Dalmaciji kroz plesnu poduku i organizaciju plesnih evenata. Za sve detalje kliknite na pojedini plesni klub!',                                
            'status'        => 'open',
            'type'          => 'school',
            'contact'       => '',                                    
            'phone'         => '+385 98 330 260',
            'email'         => 'info@centarplesa.hr',
            'website'       => 'https://centarplesa.hr',
            'city_id'       => 4,
            'user_id'       => 1,            
            'oid'           => '',
            'facebook'      => 'https://www.facebook.com/CentarPlesa.hr/',
            'instagram'     => 'https://www.instagram.com/centarplesa/',
            'youtube'       => 'https://www.youtube.com/channel/UCu72kQ0eZTvPoYC7S4FMJAA',
            'address'       => '',
            'zip'           => '',                                      
            'video'         => '<iframe width="560" height="315" src="https://www.youtube.com/embed/zB-QcShpWJQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
        ]);

        $bc = Organization::create([
            'name'          => 'Baila conmigo by Jerko & Maja',
            'slug'          => 'baila-conmigo-by-jerko-maja-1636023655',
            'shortname'     => 'Baila conmigo',
            'about'         => '',                                
            'status'        => 'open',
            'type'          => 'school',
            'contact'       => '',
            'phone'         => '',
            'email'         => 'plesnistudio.bailaconmigo@gmail.com',
            'city_id'       => 4,
            'user_id'       => 1,
            'website'       => '',
            'oid'           => '',
            'facebook'      => 'https://www.facebook.com/bailaconmigobyjerkoimaja',
            'instagram'     => 'https://www.instagram.com/baila_conmigo__/',
            'youtube'       => 'https://www.youtube.com/channel/UCZ_FJLFCPGqGYvw8OAT_fzg',
            'address'       => '',
            'zip'           => '',
            'video'         => '<iframe width="560" height="315" src="https://www.youtube.com/embed/7v5gyUeuQGs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
        ]);
        $bc->addMediaFromUrl(asset('images/schools/baila-conmigo-icon.jpg'))->toMediaCollection('organization-icons','public');
        $bc->addMediaFromUrl(asset('images/schools/bailaconmigo-logo.jpg'))->toMediaCollection('organization-logos','public');

        $baba = Organization::create([
            'name'          => 'Babalú, studio za ples i pokret',
            'slug'          => 'babalu-studio-za-ples-i-pokret-1636017491',
            'shortname'     => 'Babalú',
            'about'         => 'Dance and Movement Studio based in Split, Croatia
            Specialized in salsa dancing and kinesiotherapy
            Studio za ples i pokret u Splitu
            Specijaliziran za salsu i kineziterapiju',                                
            'status'        => 'open',
            'type'          => 'school',
            'contact'       => 'Jakov Krželj',
            'phone'         => '+385981925742',
            'email'         => '',
            'city_id'       => 4,
            'user_id'       => 1,
            'website'       => '',
            'oid'           => '',
            'facebook'      => 'https://www.facebook.com/babalustudio/',
            'instagram'     => 'https://www.instagram.com/babalustudio/',
            'youtube'       => '',
            'address'       => '',
            'zip'           => '',
            'video'         => '',
        ]);
        $baba->addMediaFromUrl(asset('images/schools/babalu.png'))->toMediaCollection('organization-icons','public');
        $baba->addMediaFromUrl(asset('images/schools/babalu.png'))->toMediaCollection('organization-logos','public');

        Organization::create([
            'name'          => 'Hrvoje Cigić',
            'slug'          => 'hrvoje-cigic-1635683151',
            'shortname'     => 'Hrvoje Cigić',
            'about'         => '',                                
            'status'        => 'open',
            'type'          => 'school',
            'contact'       => '',                                    
            'phone'         => '+385 98 197 4451',
            'email'         => '',
            'city_id'       => 3,
            'user_id'       => 1,
            'website'       => '',
            'oid'           => '',
            'facebook'      => '',
            'instagram'     => '',
            'youtube'       => '',
            'address'       => '',
            'zip'           => '',
            'about'         => '',                                 
            'video'         => '',
        ]);

        $tonci = Organization::create([
            'name'          => 'Plesni Studio Tonći i Ivana',
            'slug'          => 'plesni-studio-tonci-i-ivana-1635680847',
            'shortname'     => 'Tonći i Ivana',
            'about'         => '',                                
            'status'        => 'open',
            'type'          => 'school',
            'contact'       => 'Ivana Batur',
            'phone'         => '',
            'email'         => '',
            'city_id'       => 2,
            'user_id'       => 1,
            'website'       => '',
            'oid'           => '',
            'facebook'      => '',
            'instagram'     => 'https://www.instagram.com/plesni_studio_tonci_ivana/',
            'youtube'       => '',
            'address'       => '',
            'zip'           => '',
            'about'         => '',                                 
            'video'         => '',
        ]);
        $tonci->addMediaFromUrl(asset('images/schools/tonciiivana.jpg'))->toMediaCollection('organization-logos','public');
        $tonci->addMediaFromUrl(asset('images/schools/tonciiivana.jpg'))->toMediaCollection('organization-icons','public');

        Organization::create([
            'name'          => 'Kizzadar',
            'slug'          => 'kizzadar-1635679496',
            'shortname'     => 'Kizzadar',
            'about'         => '',
            'status'        => 'open',
            'type'          => 'school',
            'contact'       => 'Ivana Stilinovic',
            'phone'         => '+385989034617',
            'email'         => 'ivana.stlnvc@gmail.com',
            'city_id'       => 2,
            'user_id'       => 1,
            'website'       => '',
            'oid'           => '',
            'facebook'      => 'https://www.facebook.com/Kizzadar',
            'instagram'     => '',
            'youtube'       => '',
            'address'       => '',
            'zip'           => '',
            'about'         => '',                                 
            'video'         => '',
        ]);

        $bd = Organization::create([
            'name'          => 'Plesna škola B dance',
            'slug'          => 'plesna-skola-b-dance-1635250665',
            'shortname'     => 'Bdance',
            'about'         => 'B dance je plesna škola Davora Bilmana.
            Davor se plesom bavi i podučava ga preko dvadeset godina.
            Trenutno su aktivni tečajevi salse, bachate, kizombe i standardnih plesova a Davor drži i individualne satove po dogovoru',                                
            'status'        => 'open',
            'type'          => 'school',
            'contact'       => 'Davor Bilman',                                    
            'phone'         => '',
            'email'         => 'bdance@faktorb.com',
            'city_id'       => 1,
            'user_id'       => 1,
            'website'       => 'http://www.bdance.hr/',
            'oid'           => '',
            'facebook'      => 'https://www.facebook.com/bdancecroatia/',
            'instagram'     => 'https://www.instagram.com/bdance_zg/',
            'youtube'       => '',
            'address'       => 'Mije Krešića 5',
            'zip'           => '10000',
            'video'         => '',
        ]);
        $bd->addMediaFromUrl(asset('images/schools/bdance.png'))->toMediaCollection('organization-logos','public');
        $bd->addMediaFromUrl(asset('images/schools/bdance.png'))->toMediaCollection('organization-icons','public');

        $shine = Organization::create([
            'name'          => 'Plesni studio Shine',
            'slug'          => 'plesni-studio-shine-1635165524',
            'shortname'     => 'Shine',
            'about'         => '',                                
            'status'        => 'open',
            'type'          => 'school',
            'contact'       => '',
            'phone'         => '099 460 7380',
            'email'         => 'danceshine@gmail.com',
            'city_id'       => 5,
            'user_id'       => 1,
            'website'       => 'http://www.ps-shine.com/',
            'oid'           => '',
            'facebook'      => 'https://www.facebook.com/PlesniStudioSHINE',
            'instagram'     => '',
            'youtube'       => '',
            'address'       => '',
            'zip'           => '',
            'about'         => '',                                 
            'video'         => '',
        ]);
        $shine->addMediaFromUrl(asset('images/schools/shine-osijek.png'))->toMediaCollection('organization-logos','public');
        $shine->addMediaFromUrl(asset('images/schools/shine-osijek.png'))->toMediaCollection('organization-icons','public');

        $fe = Organization::create([
            'name'          => 'ŠPU Feniks Osijek',
            'slug'          => 'spu-feniks-osijek-1635162622',
            'shortname'     => 'Feniks',
            'about'         => '',
            'status'        => 'open',
            'type'          => 'school',
            'contact'       => '',
            'phone'         => '',
            'email'         => 'spufeniks@gmail.com',
            'city_id'       => 5,
            'user_id'       => 1,
            'website'       => '',
            'oid'           => '',
            'facebook'      => 'https://www.facebook.com/spufeniksosijek',
            'instagram'     => '',
            'youtube'       => '',
            'address'       => '',
            'zip'           => '',
            'about'         => '',                                 
            'video'         => '',
        ]);    
        $fe->addMediaFromUrl(asset('images/schools/feniks-osijek-square.jpg'))->toMediaCollection('organization-logos','public');
        $fe->addMediaFromUrl(asset('images/schools/feniks-osijek.jpg'))->toMediaCollection('organization-icons','public');

        $bo = Organization::create([
            'name'          => 'Plesni klub "Bolero" Osijek - Bolero Dance',
            'slug'          => 'plesni-klub-bolero-osijek-bolero-dance-1635164106',
            'shortname'     => 'Bolero',
            'about'         => '',                                
            'status'        => 'open',
            'type'          => 'school',
            'contact'       => '',                                    
            'phone'         => '+385 99 377 9799',
            'email'         => 'dance.bolero@gmail.com',
            'city_id'       => 5,
            'user_id'       => 1,
            'website'       => 'http://bolero.hr',
            'oid'           => '',
            'facebook'      => 'https://www.facebook.com/bolero.dance/',
            'instagram'     => 'https://www.instagram.com/plesni_klub_bolero_osijek/',
            'youtube'       => '',
            'address'       => '',
            'zip'           => '',
            'about'         => '',                                 
            'video'         => '',
        ]);   
        $bo->addMediaFromUrl(asset('images/schools/bolero-red-blue.jpg'))->toMediaCollection('organization-logos','public');
        $bo->addMediaFromUrl(asset('images/schools/bolero-yellow.jpg'))->toMediaCollection('organization-icons','public');

        $ilu =Organization::create([
            'name'          => 'Plesni Studio Illusion',
            'slug'          => 'plesni-studio-illusion-1635165253',
            'shortname'     => 'Illusion',
            'about'         => '',
            'status'        => 'open',
            'type'          => 'school',
            'contact'       => '',
            'phone'         => '+385 95 500 2987',
            'email'         => 'plesnistudioillusion@gmail.com',
            'city_id'       => 5,
            'user_id'       => 1,
            'website'       => '',
            'oid'           => '',
            'facebook'      => 'https://www.facebook.com/plesnistudioillusion/',
            'instagram'     => '',
            'youtube'       => '',
            'address'       => '',
            'zip'           => '',
            'about'         => '',
            'video'         => '',
        ]);        
        $ilu->addMediaFromUrl(asset('images/schools/illusion.jpg'))->toMediaCollection('organization-logos','public');
        $ilu->addMediaFromUrl(asset('images/schools/illusion.jpg'))->toMediaCollection('organization-icons','public');

        Organization::create([
            'name'          => 'Sportsko rekreacijski i plesni klub CasaBlanka',
            'slug'          => 'sportsko-rekreacijski-i-plesni-klub-casablanka',                                    
            'contact'       => 'CasaBlanka',
            'shortname'     => 'Casablanka',
            'about'         => 'CasaBlanka klub nudi Vam punoooooo aktivnosti i programa u kojima ćete sigurno pronaći neku za sebe! U našem novom ekskluzivno uređenom klubu u centru grada, očekuju Vas pristupačni,ljubazni i stručni voditelji!
            Zaplešite s nama, vježbajte s nama, zabavite se s nama, odaberite program za sebe!
            Plesna škola:
            GRUPNI PLESNI TEČAJEVI LATINO-AMERIČKIH, STANDARDNIH I DRUŠTVENIH PLESOVA (početna grupa/napredna grupa),
            PLESNI TEČAJEVI ZA MLADENCE,
            KOREOGRAFIRANJE PRVOG PLESA,
            INDIVIDUALNA PLESNA PODUKA,
            SALSA,BACHATA TEČAJ.
            Fitness,ples i rekreacija:
            LATINO FITNESS,
            PILATES MIX,
            ORIJENTAL FITNESS,
            INTERVAL JUMP MIX, MINI TRAMPOLINI, KRUŽNI FUNKCIONALNI TRENING I TABATA,
            FITNESS ROOM I VIBRO POWER,
            OSOBNI TRENINZI I PRIVATNE GRUPE.
            Dječji:
            MINI NAVIJAČICE(3-5god),
            KARLOVAČKE NAVIJAČICE (5-9god, 9-15god),
            BREAK DANCE
            BACHATA KIDS
            PLESNA ŠKOLA ZA DJECU
            Party:
            SHOW NASTUPI I ANIMACIJA,
            FACEPAINTING,
            PARTY PROGRAMI ZA SVE PRIGODE-za velike i male
            Osobni treninzi ili grupni treninzi, privatna teretana na raspolaganju u terminu po dogovoru, osobni treninzi i vibro power plate.
            UPISI U TIJEKU!
            Vidimo se na adresi V. Mačeka 31 (Novi centar/Dubovac- nasuprot elektre).
            ',
            'status'        => 'open',
            'type'          => 'school',
            'city_id'       => 25,
            'user_id'       => 1,
            'website'       => '',
            'oid'           => '',
            'phone'         => '+385 92 278 28 02',
            'email'         => 'blanka.casablanka@gmail.com',
            'address'       => 'V. Mačeka 31',
            'facebook'      => 'https://www.facebook.com/casablanka.karlovac',
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