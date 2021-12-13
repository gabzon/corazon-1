<?php

namespace Database\Seeders\Courses\Sibenik;

use App\Models\City;
use App\Models\Course;
use App\Models\Organization;
use App\Models\Style;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class Hrvoje extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $school = Organization::where('name','Hrvoje Cigić')->first();
        $city = City::where('name','Šibenik')->first();
        $style = Style::select(['id','name'])->get();
        $b = $style->where('name','Bachata')->pluck('id');
        $s = $style->where('name','Salsa on2')->pluck('id');

        $c1 = Course::create([            
            'name'           => 'Salsa i Bachata',
            'tagline'        => '',
            'slug'           => 'salsa-i-bachata-1635683980',        
            'level'          => 'intermediate',
            'level_code'     => 'b1',
            'focus'          => 'partnerwork',
            'type'           => 'class', 
            'status'         => 'active',
            'description'    => 'Nakon duge pauze i iščekivanja Šibenik napokon pleše! 
            Pridružite nam se u ponedjeljak, 18. listopada 2021. na tečajevima salse i bachate i uvjerite se zašto su to najrašireniji plesovi današnjice.
            Treninzi će se odvijati u dvije grupe, početnoj i naprednoj. 
            Termin ponedjeljak i srijeda:
            Početna grupa - 20:15 h
            Srednje/napredna grupa - 21:15 h
            Za sva pitanja i informacije nazovite naše instruktore. 
            Hrvoje: 098 197 4451
            Vlatka: 099 436 4820
            Adresa: Žaborička ulica 3E, Šibenik (pokraj Enigme).
            Rezervirajte svoje mjesto, a mi vas s veseljem iščekujemo!',
            'start_date'     => Carbon::now(), 
            'end_date'       => Carbon::now()->add(10, 'month'),
            'monday'         => true,
            'start_time_mon' => '21:15:00',
            'end_time_mon'   => '22:15:00',
            'wednesday'       => true,
            'start_time_thu' => '21:15:00',
            'end_time_thu'   => '22:15:00',
            'user_id'        => 1, 
            'city_id'        => $city->id, 
            'organization_id'=> $school->id,
            'space_id'       => 15,
        ]);
        $c1->styles()->attach([$b[0],$s[0]]);

        $t1 = Course::create([            
            'name'           => 'Bachata i Salsa',
            'tagline'        => '',
            'slug'           => 'bachata-i-salsa-1635683667',        
            'level'          => 'beginner',
            'level_code'     => 'a1',
            'focus'          => 'partnerwork',
            'type'           => 'class', 
            'status'         => 'active',
            'start_date'     => Carbon::now(), 
            'end_date'       => Carbon::now()->add(10, 'month'),
            'monday'         => true,
            'start_time_mon' => '20:15:00',
            'end_time_mon'   => '21:15:00',
            'wednesday'       => true,
            'start_time_thu' => '20:15:00',
            'end_time_thu'   => '21:15:00',
            'user_id'        => 1, 
            'city_id'        => $city->id, 
            'organization_id'=> $school->id,
            'space_id'       => 15,
        ]);
        $t1->styles()->attach([$b[0],$s[0]]);
    }
}


// 1 Havana (Buenavista zg)
// 2 Santiago de Cuba (Buenavista zg)
// 3 Guantanamo (Buenavista zg)
// 4 Matanzas (Buenavista)
// 5 Santa Clara (Buenavista)

// 6 Velika Soba (Bandoleros)
// 7 Mala soba (Bandoleros)
// 8 Salsa fusion
// 9 Velika soba (PC Salsa)
// 10 Mala Soba (PC Salsa)

// 11 Soss
// 12 Mint Fitness
// 13 1st floor (Guliver Fitness)
// 14 Vitalnost
// 15 Žižula
// 16 Pomak
// 17 Dance center
// 18 Tango zagreb
// 19 Casablanka
