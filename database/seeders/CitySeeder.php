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
            'name'       => 'Zagreb',
            'slug'       => Str::slug('zagreb', '-'),
            'content'    => 'Zagreb is the capital and largest city of Croatia. It is in the northwest of the country, along the Sava river, at the southern slopes of the Medvednica mountain. Zagreb lies at an elevation of approximately 122 m (400 ft) above sea level. The estimated population of the city in 2018 was 804,507. The population of the Zagreb urban agglomeration is 1,153,255, approximately a quarter of the total population of Croatia.(wikipedia)',
            'state'      => 'Zagreb',
            'region'     => 'Zagreb',
            'subregion'  => 'Zagreb',            
            'lng'        => 15.981919,
            'lat'        => 45.815010,
            'zip'        => '10000',
            'country'    => 'Croatia',
            'alpha2Code' => 'HR',
            'alpha3Code' => 'HRV',
            'iataCode'   => 'ZAG',
        ]);        

        City::create([
            'name'       => 'Zadar',
            'slug'       => Str::slug('zadar', '-'),
            'content'    => 'Zadar is the oldest continuously inhabited Croatian city. It is situated on the Adriatic Sea, at the northwestern part of Ravni Kotari region. Zadar serves as the seat of Zadar County and of the wider northern Dalmatian region. The city proper covers 25 km2 (9.7 sq mi) with a population of 75,082 in 2011, making it the second-largest city of the region of Dalmatia and the fifth-largest city in the country. (wikipedia)',
            'state'      => 'Zadar',
            'region'     => 'Dalmatian',
            'subregion'  => 'Northem-dalmatia',            
            'lng'        => 15.231365,
            'lat'        => 44.119370,
            'zip'        => '23000',
            'country'    => 'Croatia',
            'alpha2Code' => 'HR',
            'alpha3Code' => 'HRV',
            'iataCode'   => 'ZAD',
        ]);                

        City::create([
            'name'       => 'Šibenik',
            'slug'       => Str::slug('Šibenik', '-'),
            'content'    => 'Šibenik is a historic city in Croatia, located in central Dalmatia, where the river Krka flows into the Adriatic Sea. Šibenik is a political, educational, transport, industrial and tourist center of Šibenik-Knin County, and is also the third-largest city in the Dalmatian region. As of 2011, the city has 34,302 inhabitants, while the municipality has 46,332 inhabitants. (wikipedia)',
            'state'      => 'Šibenik-Knin',
            'region'     => 'Dalmatian',
            'subregion'  => '',
            'code'       => $faker->regexify('[A-Za-z0-9]{20}'),
            'lng'        => 15.895070,
            'lat'        => 43.733990,
            'zip'        => '22000',
            'country'    => 'Croatia',
            'alpha2Code' => 'HR',
            'alpha3Code' => 'HRV',
            'iataCode'   => '',
        ]);
        
        City::create([
            'name'       => 'Split',
            'slug'       => Str::slug('Split', '-'),
            'content'    => 'Split is Croatia\'s second-largest city and the largest city in the Dalmatia region. It lies on the eastern shore of the Adriatic Sea and is spread over a central peninsula and its surroundings. An intraregional transport hub and popular tourist destination, the city is linked to the Adriatic islands and the Apennine peninsula. (wikipedia)',
            'state'      => 'Split-Dalmatia',
            'region'     => 'Dalmatian',
            'subregion'  => '',            
            'lng'        => 16.440193,
            'lat'        => 43.508133,
            'zip'        => '21000',
            'country'    => 'Croatia',
            'alpha2Code' => 'HR',
            'alpha3Code' => 'HRV',
            'iataCode'   => 'SPU',
        ]);
        
        City::create([
            'name'       => 'Osijek',
            'slug'       => Str::slug('Osijek', '-'),
            'content'    => 'Osijek is the fourth largest city in Croatia with a population of 108,048 in 2011.[1] It is the largest city and the economic and cultural centre of the eastern Croatian region of Slavonia, as well as the administrative centre of Osijek-Baranja County. Osijek is located on the right bank of the river Drava, 25 kilometres (16 mi) upstream of its confluence with the Danube, at an elevation of 94 metres (308 ft). (wikipedia)',
            'state'      => 'Slavonia',
            'region'     => 'Slavonia',
            'subregion'  => '',            
            'lng'        => 18.695515,
            'lat'        => 45.554962,
            'zip'        => '31000',
            'country'    => 'Croatia',
            'alpha2Code' => 'HR',
            'alpha3Code' => 'HRV',
            'iataCode'   => 'OSI',
        ]);        

        City::create([
            'name'       => 'Varaždin',
            'slug'       => Str::slug('Varaždin', '-'),
            'content'    => 'Varaždin is a city in Northern Croatia, 81 km (50 mi) north of Zagreb. The total population is 46,946, with 38,839 on 34.22 km2 (13.21 sq mi) of the city settlement itself (2011). The centre of Varaždin County is located near the Drava River, at 46.312°N 16.361°E. It is mainly known for its baroque buildings, music, textile, food and IT industry.(wikipedia)',
            'state'      => '',
            'region'     => '',
            'subregion'  => '',            
            'lng'        => 16.336607,
            'lat'        => 46.305744,
            'zip'        => '40305',
            'country'    => 'Croatia',
            'alpha2Code' => 'HR',
            'alpha3Code' => 'HRV',
            'iataCode'   => 'LDVA',
        ]);

        City::create([
            'name'       => 'Dubrovnik',
            'slug'       => Str::slug('dubrovnik', '-'),
            'content'    => 'Dubrovnik is a city on the Adriatic Sea in southern Croatia. It is one of the most prominent tourist destinations in the Mediterranean Sea, a seaport and the centre of Dubrovnik-Neretva County. Its total population is 42,615 (census 2011). In 1979, the city of Dubrovnik was added to the UNESCO list of World Heritage sites in recognition of its outstanding medieval architecture and fortified old town (wikipedia)',
            'state'      => 'Dubrovnik-Neretva',
            'region'     => 'Dalmatia',
            'subregion'  => 'Dubrovnik-Neretva',            
            'lng'        => 18.094423,
            'lat'        => 42.650661,
            'zip'        => '20000',
            'country'    => 'Croatia',
            'alpha2Code' => 'HR',
            'alpha3Code' => 'HRV',
            'iataCode'   => 'DBV',
        ]);

        City::create([
            'name'       => 'Pula',
            'slug'       => Str::slug('Pula', '-'),
            'content'    => 'Pula is the largest city in Istria County, Croatia, and the eighth-largest city in the country, situated at the southern tip of the Istrian peninsula, with a population of 57,460 in 2011. It is known for its multitude of ancient Roman buildings, the most famous of which is the Pula Arena, one of the best preserved Roman amphitheaters. The city has a long tradition of wine making, fishing, shipbuilding, and tourism. It was the administrative centre of Istria from ancient Roman times until superseded by Pazin in 1991.(wikipedia)',
            'state'      => '',
            'region'     => 'Istria',
            'subregion'  => 'Southern Istria',            
            'lng'        => 13.849579,
            'lat'        => 44.866623,
            'zip'        => '52100',
            'country'    => 'Croatia',
            'alpha2Code' => 'HR',
            'alpha3Code' => 'HRV',
            'iataCode'   => 'PUY',
        ]);        

        City::create([
            'name'      => 'Rovinj',
            'slug'      => Str::slug('Rovinj', '-'),
            'content'   => 'Rovinj is a city in Croatia situated on the north Adriatic Sea with a population of 14,294 (2011). Located on the western coast of the Istrian peninsula, it is a popular tourist resort and an active fishing port. Istriot, a Romance language once widely spoken in this part of Istria, is still spoken by some of the residents. The town is officially bilingual, Italian and Croatian, hence both town names are official and equal. (wikipedia)',
            'state'     => 'Istria',
            'region'    => 'Istria',
            'subregion' => 'Center Istria',
            'code'      => $faker->regexify('[A-Za-z0-9]{20}'),
            'lng'       => 13.638707,
            'lat'       => 45.081165,
            'zip'       => '52210',
            'country'   => 'Croatia',
            'alpha2Code' => 'HR',
            'alpha3Code' => 'HRV',
            'iataCode'  => '',
        ]);                
        
        City::create([
            'name'       => 'Rijeka',
            'slug'       => Str::slug('Rijeka', '-'),
            'content'    => 'Rijeka is the principal seaport and the third-largest city in Croatia (after Zagreb and Split). It is located in Primorje-Gorski Kotar County on Kvarner Bay, an inlet of the Adriatic Sea and in 2011 had a population of 128,624 inhabitants. Historically, because of its strategic position and its excellent deep-water port, the city was fiercely contested, especially between Italy, Hungary (serving as the Kingdom of Hungary\'s largest and most important port), and Croatia, changing rulers and demographics many times over centuries. According to the 2011 census data, the majority of its citizens are Croats, along with a minority of Serbs, and smaller numbers of Bosniaks and Italians. (wikipedia)',
            'state'      => 'Primorje-Gorski Kotar',
            'region'     => 'Istria',
            'subregion'  => '',            
            'lng'        => 14.4422,
            'lat'        => 45.3271,
            'zip'        => '51000',
            'country'    => 'Croatia',
            'alpha2Code' => 'HR',
            'alpha3Code' => 'HRV',
            'iataCode'   => 'RJK',
        ]);

        City::create([
            'name'       => 'Podgorica',
            'slug'       => Str::slug('Podgorica', '-'),
            'content'    => 'Podgorica is the capital and largest city of Montenegro. The city was known as Titograd between 1946 and 1992—in the period that Montenegro formed, as the Socialist Republic of Montenegro, part of the Socialist Federal Republic of Yugoslavia (SFRY)—in honour of Marshal Josip Broz Tito. (wikipedia)',
            'state'      => 'Podgorica Capital City',
            'region'     => '',
            'subregion'  => '',            
            'lng'        => 19.2594,
            'lat'        => 42.4304,
            'zip'        => '81110',
            'country'    => 'Montenegro',
            'alpha2Code' => 'ME',
            'alpha3Code' => 'MNE',
            'iataCode'   => 'TGD',
        ]);                   
        
        City::create([
            'name'       => 'Sarajevo',
            'slug'       => Str::slug('Sarajevo', '-'),
            'content'    => 'Sarajevo is the capital and largest city of Bosnia and Herzegovina, with a population of 275,569 in its administrative limits. The Sarajevo metropolitan area including Sarajevo Canton, East Sarajevo and nearby municipalities is home to 555,210 inhabitants. Located within the greater Sarajevo valley of Bosnia, it is surrounded by the Dinaric Alps and situated along the Miljacka River in the heart of the Balkans, a region of Southern Europe. (wikipedia)',
            'state'      => 'Sarajevo',
            'region'     => '',
            'subregion'  => '',            
            'lng'        => 18.4131,
            'lat'        => 43.8563,
            'zip'        => '71000',
            'country'    => 'Bosnia and Herzegovina',
            'alpha2Code' => 'BA',
            'alpha3Code' => 'BIH',
            'iataCode'   => 'SJJ',
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
        // Budva



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


