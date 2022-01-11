<?php

namespace Database\Seeders;

use App\Models\City;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        
        City::create([
            'name'          => 'Zagreb',
            'slug'          => Str::slug('zagreb', '-'),
            'description'   => 'Zagreb is the capital and largest city of Croatia. It is in the northwest of the country, along the Sava river, at the southern slopes of the Medvednica mountain. Zagreb lies at an elevation of approximately 122 m (400 ft) above sea level. The estimated population of the city in 2018 was 804,507. The population of the Zagreb urban agglomeration is 1,153,255, approximately a quarter of the total population of Croatia.(wikipedia)',
            'state'         => 'Zagreb',
            'region'        => 'Zagreb',            
            'lng'           => 15.981919,
            'lat'           => 45.815010,
            'zip'           => '10000', 
            'country'       => 'Croatia',
            'alpha2Code'    => 'HR',
            'alpha3Code'    => 'HRV',
            'iataCode'      => 'ZAG',
            'population'    => 806341,
            'world_region'  => 'Europe',
            'user_id'       => 1,            
        ]);        

        City::create([
            'name'          => 'Zadar',
            'slug'          => Str::slug('zadar', '-'),
            'description'   => 'Zadar is the oldest continuously inhabited Croatian city. It is situated on the Adriatic Sea, at the northwestern part of Ravni Kotari region. Zadar serves as the seat of Zadar County and of the wider northern Dalmatian region. The city proper covers 25 km2 (9.7 sq mi) with a population of 75,082 in 2011, making it the second-largest city of the region of Dalmatia and the fifth-largest city in the country. (wikipedia)',
            'state'         => 'Zadar',
            'region'        => 'Dalmatian',                
            'lng'           => 15.231365,
            'lat'           => 44.119370,
            'zip'           => '23000',
            'country'       => 'Croatia',
            'alpha2Code'    => 'HR',
            'alpha3Code'    => 'HRV',
            'iataCode'      => 'ZAD',
            'population'    => 75082,
            'world_region'  => 'Europe',
            'user_id'       => 1,
        ]);                

        City::create([
            'name'          => 'Šibenik',
            'slug'          => Str::slug('Šibenik', '-'),
            'description'   => 'Šibenik is a historic city in Croatia, located in central Dalmatia, where the river Krka flows into the Adriatic Sea. Šibenik is a political, educational, transport, industrial and tourist center of Šibenik-Knin County, and is also the third-largest city in the Dalmatian region. As of 2011, the city has 34,302 inhabitants, while the municipality has 46,332 inhabitants. (wikipedia)',
            'state'         => 'Šibenik-Knin',
            'region'        => 'Dalmatian',            
            'code'          => $faker->regexify('[A-Za-z0-9]{20}'),
            'lng'           => 15.895070,
            'lat'           => 43.733990,
            'zip'           => '22000',
            'country'       => 'Croatia',
            'alpha2Code'    => 'HR',
            'alpha3Code'    => 'HRV',
            'iataCode'      => '',
            'population'    => 34302,
            'world_region'  => 'Europe',
            'user_id'       => 1,
        ]);
        
        City::create([
            'name'          => 'Split',
            'slug'          => Str::slug('Split', '-'),
            'description'   => 'Split is Croatia\'s second-largest city and the largest city in the Dalmatia region. It lies on the eastern shore of the Adriatic Sea and is spread over a central peninsula and its surroundings. An intraregional transport hub and popular tourist destination, the city is linked to the Adriatic islands and the Apennine peninsula. (wikipedia)',
            'state'         => 'Split-Dalmatia',
            'region'        => 'Dalmatian',                 
            'lng'           => 16.440193,
            'lat'           => 43.508133,
            'zip'           => '21000',
            'country'       => 'Croatia',
            'alpha2Code'    => 'HR',
            'alpha3Code'    => 'HRV',
            'iataCode'      => 'SPU',
            'population'    => 178102,
            'world_region'  => 'Europe',
            'user_id'       => 1,
        ]);
        
        City::create([
            'name'          => 'Osijek',
            'slug'          => Str::slug('Osijek', '-'),
            'description'   => 'Osijek is the fourth largest city in Croatia with a population of 108,048 in 2011.[1] It is the largest city and the economic and cultural centre of the eastern Croatian region of Slavonia, as well as the administrative centre of Osijek-Baranja County. Osijek is located on the right bank of the river Drava, 25 kilometres (16 mi) upstream of its confluence with the Danube, at an elevation of 94 metres (308 ft). (wikipedia)',
            'state'         => 'Slavonia',
            'region'        => 'Slavonia',                      
            'lng'           => 18.695515,
            'lat'           => 45.554962,
            'zip'           => '31000',
            'country'       => 'Croatia',
            'alpha2Code'    => 'HR',
            'alpha3Code'    => 'HRV',
            'iataCode'      => 'OSI',
            'population'    => 108048,
            'world_region'  => 'Europe',
            'user_id'       => 1,
        ]);        

        City::create([
            'name'          => 'Varaždin',
            'slug'          => Str::slug('Varaždin', '-'),
            'description'   => 'Varaždin is a city in Northern Croatia, 81 km (50 mi) north of Zagreb. The total population is 46,946, with 38,839 on 34.22 km2 (13.21 sq mi) of the city settlement itself (2011). The centre of Varaždin County is located near the Drava River, at 46.312°N 16.361°E. It is mainly known for its baroque buildings, music, textile, food and IT industry.(wikipedia)',
            'state'         => 'Zagorje',
            'region'        => '',                        
            'lng'           => 16.336607,
            'lat'           => 46.305744,
            'zip'           => '42000',
            'country'       => 'Croatia',
            'alpha2Code'    => 'HR',
            'alpha3Code'    => 'HRV',
            'iataCode'      => 'LDVA',
            'population'    => 46946,
            'world_region'  => 'Europe',
            'user_id'       => 1,
        ]);

        City::create([
            'name'          => 'Dubrovnik',
            'slug'          => Str::slug('dubrovnik', '-'),
            'description'   => 'Dubrovnik is a city on the Adriatic Sea in southern Croatia. It is one of the most prominent tourist destinations in the Mediterranean Sea, a seaport and the centre of Dubrovnik-Neretva County. Its total population is 42,615 (census 2011). In 1979, the city of Dubrovnik was added to the UNESCO list of World Heritage sites in recognition of its outstanding medieval architecture and fortified old town (wikipedia)',
            'state'         => 'Dubrovnik-Neretva',
            'region'        => 'Dalmatia',                    
            'lng'           => 18.094423,
            'lat'           => 42.650661,
            'zip'           => '20000',
            'country'       => 'Croatia',
            'alpha2Code'    => 'HR',
            'alpha3Code'    => 'HRV',
            'iataCode'      => 'DBV',
            'population'    => 42615,
            'world_region'  => 'Europe',
            'user_id'       => 1,
        ]);

        City::create([
            'name'          => 'Pula',
            'slug'          => Str::slug('Pula', '-'),
            'description'   => 'Pula is the largest city in Istria County, Croatia, and the eighth-largest city in the country, situated at the southern tip of the Istrian peninsula, with a population of 57,460 in 2011. It is known for its multitude of ancient Roman buildings, the most famous of which is the Pula Arena, one of the best preserved Roman amphitheaters. The city has a long tradition of wine making, fishing, shipbuilding, and tourism. It was the administrative centre of Istria from ancient Roman times until superseded by Pazin in 1991.(wikipedia)',
            'state'         => '',
            'region'        => 'Istria',                 
            'lng'           => 13.849579,
            'lat'           => 44.866623,
            'zip'           => '52100',
            'country'       => 'Croatia',
            'alpha2Code'    => 'HR',
            'alpha3Code'    => 'HRV',
            'iataCode'      => 'PUY',
            'population'    => 56540,
            'world_region'  => 'Europe',
            'user_id'       => 1,
        ]);        

        City::create([
            'name'          => 'Rovinj',
            'slug'          => Str::slug('Rovinj', '-'),
            'description'   => 'Rovinj is a city in Croatia situated on the north Adriatic Sea with a population of 14,294 (2011). Located on the western coast of the Istrian peninsula, it is a popular tourist resort and an active fishing port. Istriot, a Romance language once widely spoken in this part of Istria, is still spoken by some of the residents. The town is officially bilingual, Italian and Croatian, hence both town names are official and equal. (wikipedia)',
            'state'         => 'Istria',
            'region'        => 'Istria',            
            'code'          => $faker->regexify('[A-Za-z0-9]{20}'),
            'lng'           => 13.638707,
            'lat'           => 45.081165,
            'zip'           => '52210',
            'country'       => 'Croatia',
            'alpha2Code'    => 'HR',
            'alpha3Code'    => 'HRV',
            'iataCode'      => '',
            'population'    => 14294,
            'world_region'  => 'Europe',
            'user_id'       => 1,
        ]);                
        
        City::create([
            'name'          => 'Rijeka',
            'slug'          => Str::slug('Rijeka', '-'),
            'description'   => 'Rijeka is the principal seaport and the third-largest city in Croatia (after Zagreb and Split). It is located in Primorje-Gorski Kotar County on Kvarner Bay, an inlet of the Adriatic Sea and in 2011 had a population of 128,624 inhabitants. Historically, because of its strategic position and its excellent deep-water port, the city was fiercely contested, especially between Italy, Hungary (serving as the Kingdom of Hungary\'s largest and most important port), and Croatia, changing rulers and demographics many times over centuries. According to the 2011 census data, the majority of its citizens are Croats, along with a minority of Serbs, and smaller numbers of Bosniaks and Italians. (wikipedia)',
            'state'         => 'Primorje-Gorski Kotar',
            'region'        => 'Istria',                  
            'lng'           => 14.4422,
            'lat'           => 45.3271,
            'zip'           => '51000',
            'country'       => 'Croatia',
            'alpha2Code'    => 'HR',
            'alpha3Code'    => 'HRV',
            'iataCode'      => 'RJK',
            'population'    => 128624,
            'world_region'  => 'Europe',
            'user_id'       => 1,
        ]);

        City::create([
            'name'          => 'Bjelovar',
            'slug'          => Str::slug('Bjelovar', '-'),
            'description'   => '',
            'state'         => 'Bjelovarsko-bilogorska',
            'region'        => '',                   
            'lng'           => 16.842340,
            'lat'           => 45.898628,
            'zip'           => '43000',
            'country'       => 'Croatia',
            'alpha2Code'    => 'HR',
            'alpha3Code'    => 'HRV',
            'iataCode'      => 'LDZJ',
            'population'    => 40276,
            'world_region'  => 'Europe',
            'user_id'       => 1,
        ]);
        
        City::create([
            'name'          => 'Biograd na Moru',
            'slug'          => Str::slug('biograd-na-Moru', '-'),
            'description'   => '',
            'state'         => 'Zadarska',
            'region'        => 'Dalmatia',                   
            'lng'           => 15.444410,
            'lat'           => 43.937832,
            'zip'           => '23210',
            'country'       => 'Croatia',
            'alpha2Code'    => 'HR',
            'alpha3Code'    => 'HRV',
            'iataCode'      => '',
            'population'    => 5569,
            'world_region'  => 'Europe',
            'user_id'       => 1,
        ]);

        City::create([
            'name'          => 'Crikvenica',
            'slug'          => Str::slug('Crikvenica', '-'),
            'description'   => '',
            'state'         => 'Primorsko-Goranska',
            'region'        => 'Kvarner',                   
            'lng'           => 14.691080,
            'lat'           => 45.173149,
            'zip'           => '51260',
            'country'       => 'Croatia',
            'alpha2Code'    => 'HR',
            'alpha3Code'    => 'HRV',
            'iataCode'      => '',
            'population'    => 11122,
            'world_region'  => 'Europe',
            'user_id'       => 1,
        ]);


        City::create([
            'name'          => 'Vukovar',
            'slug'          => Str::slug('vukovar', '-'),
            'description'   => '',
            'state'         => 'Vukovarsko',
            'region'        => 'Srijemska',              
            'lat'           => 45.352440,
            'lng'           => 19.000050,
            'zip'           => '32000',
            'country'       => 'Croatia',
            'alpha2Code'    => 'HR',
            'alpha3Code'    => 'HRV',
            'iataCode'      => '',
            'population'    => 27683,
            'world_region'  => 'Europe',
            'user_id'       => 1,
        ]);

        City::create([
            'name'          => 'Čakovec',
            'slug'          => Str::slug('cakovec', '-'),
            'description'   => '',
            'state'         => 'Međimurska',
            'region'        => 'Međimurje',           
            'lng'           => 16.439070,
            'lat'           => 46.389851,
            'zip'           => '40000',
            'country'       => 'Croatia',
            'alpha2Code'    => 'HR',
            'alpha3Code'    => 'HRV',
            'iataCode'      => '',
            'population'    => 27820,
            'world_region'  => 'Europe',
            'user_id'       => 1,
        ]);

        City::create([
            'name'          => 'Đakovo',
            'slug'          => Str::slug('Đakovo', '-'),
            'description'   => '',
            'state'         => 'Osječko-baranjska',
            'region'        => 'Slavonia',              
            'lng'           => 18.407949,
            'lat'           => 45.308048,
            'zip'           => '31400',
            'country'       => 'Croatia',
            'alpha2Code'    => 'HR',
            'alpha3Code'    => 'HRV',
            'iataCode'      => '',
            'population'    => 27745,
            'world_region'  => 'Europe',
            'user_id'       => 1,
        ]);

        City::create([
            'name'          => 'Hvar',
            'slug'          => Str::slug('hvar', '-'),
            'description'   => '',
            'state'         => 'Splitsko-Dalmatinska',
            'region'        => 'Dalmatia',
            'lat'           => 43.172588,
            'lng'           => 16.443230,
            'zip'           => '21450',
            'country'       => 'Croatia',
            'alpha2Code'    => 'HR',
            'alpha3Code'    => 'HRV',
            'iataCode'      => '',
            'population'    => 4251,
            'world_region'  => 'Europe',
            'user_id'       => 1,
        ]);

        City::create([
            'name'          => 'Knin',
            'slug'          => Str::slug('KNIN', '-'),
            'description'   => '',
            'state'         => 'Šibensko-Kninska',
            'region'        => 'Dalmatia',              
            'lng'           => 16.197300,
            'lat'           => 44.037102,
            'zip'           => '22300',
            'country'       => 'Croatia',
            'alpha2Code'    => 'HR',
            'alpha3Code'    => 'HRV',
            'iataCode'      => '',
            'population'    => 15407,
            'world_region'  => 'Europe',
            'user_id'       => 1,
        ]);

        City::create([
            'name'          => 'Koprivnica',
            'slug'          => Str::slug('Koprivnica', '-'),
            'description'   => '',
            'state'         => 'Koprivničko-Križevačka',
            'region'        => '',              
            'lat'           => 46.163311,
            'lng'           => 16.829710,
            'zip'           => '48000',
            'country'       => 'Croatia',
            'alpha2Code'    => 'HR',
            'alpha3Code'    => 'HRV',
            'iataCode'      => '',
            'population'    => 30854,
            'world_region'  => 'Europe',
            'user_id'       => 1,
        ]);

        City::create([
            'name'          => 'Krk',
            'slug'          => Str::slug('krk', '-'),
            'description'   => '',
            'state'         => 'Primorsko-Goranska',
            'region'        => 'Kvarner',              
            'lat'           => 45.026199,
            'lng'           => 14.573340,
            'zip'           => '51500',
            'country'       => 'Croatia',
            'alpha2Code'    => 'HR',
            'alpha3Code'    => 'HRV',
            'iataCode'      => '',
            'population'    => 6281,
            'world_region'  => 'Europe',
            'user_id'       => 1,
        ]);

        City::create([
            'name'          => 'Makarska',
            'slug'          => Str::slug('Makarska', '-'),
            'description'   => '',
            'state'         => 'Splitsko-Dalmatinska',
            'region'        => 'Dalmatia',
            'lat'           => 43.293789,
            'lng'           => 17.019630,
            'zip'           => '21300',
            'country'       => 'Croatia',
            'alpha2Code'    => 'HR',
            'alpha3Code'    => 'HRV',
            'iataCode'      => '',
            'population'    => 13834,
            'world_region'  => 'Europe',
            'user_id'       => 1,
        ]);

        City::create([
            'name'          => 'Novi Vinodolski',
            'slug'          => Str::slug('Novi vinodolski', '-'),
            'description'   => '',
            'state'         => 'Primorsko-Goranska',
            'region'        => 'Kvarner',  
            'lat'           => 45.128319,
            'lng'           => 14.789270,
            'zip'           => '51250',
            'country'       => 'Croatia',
            'alpha2Code'    => 'HR',
            'alpha3Code'    => 'HRV',
            'iataCode'      => '',
            'population'    => 5113,
            'world_region'  => 'Europe',
            'user_id'       => 1,
        ]);

        City::create([
            'name'          => 'Ogulin',
            'slug'          => Str::slug('OGULIN', '-'),
            'description'   => '',
            'state'         => 'Karlovačka',
            'region'        => 'Middle Croatia',
            'lat'           => 45.266270,
            'lng'           => 15.225500,
            'zip'           => '47300',
            'country'       => 'Croatia',
            'alpha2Code'    => 'HR',
            'alpha3Code'    => 'HRV',
            'iataCode'      => '',
            'population'    => 13915,
            'world_region'  => 'Europe',
            'user_id'       => 1,
        ]);

        City::create([
            'name'          => 'Opatija',
            'slug'          => Str::slug('Opatija', '-'),
            'description'   => '',
            'state'         => 'Primorsko-Goranska',
            'region'        => 'Kvarner',              
            'lat'           => 45.337620,
            'lng'           => 14.305196,
            'zip'           => '51410',
            'country'       => 'Croatia',
            'alpha2Code'    => 'HR',
            'alpha3Code'    => 'HRV',
            'iataCode'      => '',
            'population'    => 11659,
            'world_region'  => 'Europe',
            'user_id'       => 1,
        ]);

        City::create([
            'name'          => 'Karlovac',
            'slug'          => Str::slug('KARLOVAC', '-'),
            'description'   => '',
            'state'         => 'Karlovačka',
            'region'        => 'Middle Croatia',                   
            'lng'           => 15.555340,
            'lat'           => 45.492950,
            'zip'           => '47000',
            'country'       => 'Croatia',
            'alpha2Code'    => 'HR',
            'alpha3Code'    => 'HRV',
            'iataCode'      => '',
            'population'    => 128899,
            'world_region'  => 'Europe',
            'user_id'       => 1,
        ]);

        City::create([
            'name'          => 'Ozalj',
            'slug'          => Str::slug('Ozalj', '-'),
            'description'   => '',
            'state'         => 'Karlovačka',
            'region'        => 'Middle Croatia',                   
            'lat'           => 45.612598,
            'lng'           => 15.478600,
            'zip'           => '47280',
            'country'       => 'Croatia',
            'alpha2Code'    => 'HR',
            'alpha3Code'    => 'HRV',
            'iataCode'      => '',
            'population'    => 6817,
            'world_region'  => 'Europe',
            'user_id'       => 1,
        ]);

        City::create([
            'name'          => 'Pag',
            'slug'          => Str::slug('Pag', '-'),
            'description'   => '',
            'state'         => 'Zadarska',
            'region'        => 'Dalmatia',
            'lat'           => 44.442669,
            'lng'           => 15.054280,
            'zip'           => '23250',
            'country'       => 'Croatia',
            'alpha2Code'    => 'HR',
            'alpha3Code'    => 'HRV',
            'iataCode'      => '',
            'population'    => 3846,
            'world_region'  => 'Europe',
            'user_id'       => 1,
        ]);

        City::create([
            'name'          => 'Poreč',
            'slug'          => Str::slug('Poreč', '-'),
            'description'   => '',
            'state'         => 'Istarska',
            'region'        => 'Istria',                   
            'lat'           => 45.226749,
            'lng'           => 13.597760,
            'zip'           => '52440',
            'country'       => 'Croatia',
            'alpha2Code'    => 'HR',
            'alpha3Code'    => 'HRV',
            'iataCode'      => '',
            'population'    => 16696,
            'world_region'  => 'Europe',
            'user_id'       => 1,
        ]);

        City::create([
            'name'          => 'Rab',
            'slug'          => Str::slug('Rab', '-'),
            'description'   => '',
            'state'         => 'Primorsko-Goranska',
            'region'        => 'Kvarner',                   
            'lat'           => 44.755772,
            'lng'           => 14.761970,
            'zip'           => '51280',
            'country'       => 'Croatia',
            'alpha2Code'    => 'HR',
            'alpha3Code'    => 'HRV',
            'iataCode'      => '',
            'population'    => 8065,
            'world_region'  => 'Europe',
            'user_id'       => 1,
        ]);

        City::create([
            'name'          => 'Samobor',
            'slug'          => Str::slug('Samobor', '-'),
            'description'   => '',
            'state'         => 'Zagrebačka',
            'region'        => '',                   
            'lat'           => 45.801811,
            'lng'           => 15.709680,
            'zip'           => '10430',
            'country'       => 'Croatia',
            'alpha2Code'    => 'HR',
            'alpha3Code'    => 'HRV',
            'iataCode'      => '',
            'population'    => 37633,
            'world_region'  => 'Europe',
            'user_id'       => 1,
        ]);

        City::create([
            'name'          => 'Trogir',
            'slug'          => Str::slug('TROGIR', '-'),
            'description'   => '',
            'state'         => 'Splitsko-Dalmatinska',
            'region'        => 'Dalmatia',
            'lat'           => 43.516388,
            'lng'           => 16.250189,
            'zip'           => '21220',
            'country'       => 'Croatia',
            'alpha2Code'    => 'HR',
            'alpha3Code'    => 'HRV',
            'iataCode'      => '',
            'population'    => 13192,
            'world_region'  => 'Europe',
            'user_id'       => 1,
        ]);

        City::create([
            'name'          => 'Vodice',
            'slug'          => Str::slug('Vodice', '-'),
            'description'   => '',
            'state'         => 'Šibensko-Kninska',
            'region'        => 'Dalmatia',
            'lat'           => 43.761112,
            'lng'           => 15.778760,
            'zip'           => '22211',
            'country'       => 'Croatia',
            'alpha2Code'    => 'HR',
            'alpha3Code'    => 'HRV',
            'iataCode'      => '',
            'population'    => 8875,
            'world_region'  => 'Europe',
            'user_id'       => 1,
        ]);

        City::create([
            'name'          => 'Podgorica',
            'slug'          => Str::slug('Podgorica', '-'),
            'description'   => 'Podgorica is the capital and largest city of Montenegro. The city was known as Titograd between 1946 and 1992—in the period that Montenegro formed, as the Socialist Republic of Montenegro, part of the Socialist Federal Republic of Yugoslavia (SFRY)—in honour of Marshal Josip Broz Tito. (wikipedia)',
            'state'         => 'Podgorica Capital City',
            'region'        => '',                  
            'lng'           => 19.2594,
            'lat'           => 42.4304,
            'zip'           => '81110',
            'country'       => 'Montenegro',
            'alpha2Code'    => 'ME',
            'alpha3Code'    => 'MNE',
            'iataCode'      => 'TGD',
            // 'population'    => ,
            'world_region'  => 'europe',
            'user_id'       => 1,
        ]);                   
        
        City::create([
            'name'          => 'Sarajevo',
            'slug'          => Str::slug('Sarajevo', '-'),
            'description'   => 'Sarajevo is the capital and largest city of Bosnia and Herzegovina, with a population of 275,569 in its administrative limits. The Sarajevo metropolitan area including Sarajevo Canton, East Sarajevo and nearby municipalities is home to 555,210 inhabitants. Located within the greater Sarajevo valley of Bosnia, it is surrounded by the Dinaric Alps and situated along the Miljacka River in the heart of the Balkans, a region of Southern Europe. (wikipedia)',
            'state'         => 'Sarajevo',
            'region'        => '',                   
            'lng'           => 18.4131,
            'lat'           => 43.8563,
            'zip'           => '71000',
            'country'       => 'Bosnia and Herzegovina',
            'alpha2Code'    => 'BA',
            'alpha3Code'    => 'BIH',
            'iataCode'      => 'SJJ',
            // 'population'    => ,
            'world_region'  => 'europe',
            'user_id'       => 1,
        ]);


        

        City::create([
            'name' => 'Budapest',
            'slug' => 'budapest-hungary',
            'description' => '',
            // 'state' => '',
            // 'region' => '',
            // 'subregion' => '',
            // 'code' => '',
            'lng' => 19.040236,
            'lat' => 47.497913,            
            'country' => 'Hungary',
            'alpha2Code' => '',
            'alpha3Code' => '',
            'iataCode' => '',
            'user_id'       => 1,
        ]);

        City::create([
            'name' => 'Milano',
            'slug' => 'milano-italy',
            'description' => '',
            'state' => '',
            'region' => '',            
            'code' => '',
            'lat' => 45.464203,
            'lng' => 9.189982,
            'zip' => '',
            'country' => 'Italy',
            'alpha2Code' => '',
            'alpha3Code' => '',
            'iataCode' => '',
            'user_id'       => 1,
        ]);
        
        City::create([
            'name' => 'Augsburg',
            'slug' => 'augsburg-germany',
            'description' => '',
            'state' => '',
            'region' => '',            
            'code' => '',
            'lat' => 48.370544,
            'lng' => 10.897790,
            'zip' => '',
            'country' => 'Germany',
            'alpha2Code' => '',
            'alpha3Code' => '',
            'iataCode' => '',
            'user_id'       => 1,
        ]);

        City::create([
            'name' => 'Zenica',
            'slug' => 'Zenica-bih',
            'description' => '',
            'state' => '',
            'region' => '',            
            'code' => '',
            // 'lng' => '',
            // 'lat' => '',
            'zip' => '',
            'country' => 'Bosnia and Herzegovina',
            'alpha2Code' => '',
            'alpha3Code' => '',
            'iataCode' => '',
            'user_id'       => 1,
        ]);

        City::create([
            'name' => 'Ljubljana',
            'slug' => 'ljubljana-slovenia',
            'description' => '',
            'state' => '',
            'region' => '',            
            'code' => '',
            // 'lng' => '',
            // 'lat' => '',
            'zip' => '',
            'country' => 'Slovenia',
            'alpha2Code' => '',
            'alpha3Code' => '',
            'iataCode' => '',
            'user_id'       => 1,
        ]);
        
        City::create([
            'name' => 'Geneva',
            'slug' => 'geneva-switzerland',
            'description' => '',
            'state' => '',
            'region' => '',            
            'code' => '',
            // 'lng' => '',
            // 'lat' => '',
            'zip' => '',
            'country' => 'Switzerland',
            'alpha2Code' => '',
            'alpha3Code' => '',
            'iataCode' => '',
            'user_id'       => 1,
        ]);

        City::create([
            'name' => 'Solin',
            'slug' => 'solin-croatia',
            'description' => '',
            'state' => '',
            'region' => '',            
            'code' => '',
            // 'lat' => '',
            // 'lng' => '',
            'zip' => '',
            'country' => 'Croatia',
            'alpha2Code' => '',
            'alpha3Code' => '',
            'iataCode' => '',
            'user_id'       => 1,
        ]);

        City::create([
            'name' => 'Warsaw',
            'slug' => 'warsaw-poland',
            'description' => '',
            'state' => '',
            'region' => '',            
            'code' => '',
            // 'lat' => '',
            // 'lng' => '',
            'zip' => '',
            'country' => 'Poland',
            'alpha2Code' => '',
            'alpha3Code' => '',
            'iataCode' => '',
            'user_id'       => 1,
        ]);

        City::create([
            'name' => 'Vojnic',
            'slug' => 'vojnic-croatia',
            'description' => '',
            'state' => '',
            'region' => '',            
            'code' => '',
            // 'lng' => '',
            // 'lat' => '',
            'zip' => '',
            'country' => 'Croatia',
            'alpha2Code' => '',
            'alpha3Code' => '',
            'iataCode' => '',
            'user_id'       => 1,
        ]);
        



        // City::create([
        //     'name' => '',
        //     'slug' => Str::slug('', '-'),
        //     'content' => $faker->paragraphs(3, true),
        //     'state' => '',
        //     'region' => '',
        //     'subregion' => '',
        //     'code' => $faker->regexify('[A-Za-z0-9]{20}'),
        //     'lng' => ,
        //     'lat' => ,
        //     'zip' => '',
        //     'country' => 'Croatia',
        //     'alpha2Code' => 'HR',
        //     'alpha3Code' => 'HRV',
        //     'iataCode' => '',
        // ]);
        // Banja Luka  
        
        // City::create([
        //     'name' => '',
        //     'slug' => Str::slug('', '-'),
        //     'content' => $faker->paragraphs(3, true),
        //     'state' => '',
        //     'region' => '',
        //     'subregion' => '',
        //     'code' => $faker->regexify('[A-Za-z0-9]{20}'),
        //     'lng' => ,
        //     'lat' => ,
        //     'zip' => '',
        //     'country' => 'Croatia',
        //     'alpha2Code' => 'HR',
        //     'alpha3Code' => 'HRV',
        //     'iataCode' => '',
        // ]);
        // Bihać

        // City::create([
        //     'name' => '',
        //     'slug' => Str::slug('', '-'),
        //     'content' => $faker->paragraphs(3, true),
        //     'state' => '',
        //     'region' => '',
        //     'subregion' => '',
        //     'code' => $faker->regexify('[A-Za-z0-9]{20}'),
        //     'lng' => ,
        //     'lat' => ,
        //     'zip' => '',
        //     'country' => 'Croatia',
        //     'alpha2Code' => 'HR',
        //     'alpha3Code' => 'HRV',
        //     'iataCode' => '',
        // ]);
        // Novi Sad
        
        // City::create([
        //     'name' => '',
        //     'slug' => Str::slug('', '-'),
        //     'content' => $faker->paragraphs(3, true),
        //     'state' => '',
        //     'region' => '',
        //     'subregion' => '',
        //     'code' => $faker->regexify('[A-Za-z0-9]{20}'),
        //     'lng' => ,
        //     'lat' => ,
        //     'zip' => '',
        //     'country' => 'Croatia',
        //     'alpha2Code' => 'HR',
        //     'alpha3Code' => 'HRV',
        //     'iataCode' => '',
        // ]);
        // Niš
        
        // City::create([
        //     'name' => '',
        //     'slug' => Str::slug('', '-'),
        //     'content' => $faker->paragraphs(3, true),
        //     'state' => '',
        //     'region' => '',
        //     'subregion' => '',
        //     'code' => $faker->regexify('[A-Za-z0-9]{20}'),
        //     'lng' => ,
        //     'lat' => ,
        //     'zip' => '',
        //     'country' => 'Croatia',
        //     'alpha2Code' => 'HR',
        //     'alpha3Code' => 'HRV',
        //     'iataCode' => '',
        // ]);
        // Kragujevac

        // City::create([
        //     'name' => '',
        //     'slug' => Str::slug('', '-'),
        //     'content' => $faker->paragraphs(3, true),
        //     'state' => '',
        //     'region' => '',
        //     'subregion' => '',
        //     'code' => $faker->regexify('[A-Za-z0-9]{20}'),
        //     'lng' => ,
        //     'lat' => ,
        //     'zip' => '',
        //     'country' => 'Croatia',
        //     'alpha2Code' => 'HR',
        //     'alpha3Code' => 'HRV',
        //     'iataCode' => '',
        // ]);
        // Belgrade

        // City::create([
        //     'name' => '',
        //     'slug' => Str::slug('', '-'),
        //     'content' => $faker->paragraphs(3, true),
        //     'state' => '',
        //     'region' => '',
        //     'subregion' => '',
        //     'code' => $faker->regexify('[A-Za-z0-9]{20}'),
        //     'lng' => ,
        //     'lat' => ,
        //     'zip' => '',
        //     'country' => 'Croatia',
        //     'alpha2Code' => 'HR',
        //     'alpha3Code' => 'HRV',
        //     'iataCode' => '',
        // ]);
        // Ljubljiana


        // City::create([
        //     'name' => '',
        //     'slug' => Str::slug('', '-'),
        //     'content' => $faker->paragraphs(3, true),
        //     'state' => '',
        //     'region' => '',
        //     'subregion' => '',
        //     'code' => $faker->regexify('[A-Za-z0-9]{20}'),
        //     'lng' => ,
        //     'lat' => ,
        //     'postal_code' => '',
        //     'country' => 'Croatia',
        //     'alpha2Code' => 'HR',
        //     'alpha3Code' => 'HRV',
        //     'iataCode' => '',
        // ]);




    }
}


