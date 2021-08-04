<?php

namespace Database\Seeders;

use App\Models\Style;
use Illuminate\Database\Seeder;
use Faker\Factory;

class StyleSeeder extends Seeder
{    
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        Style::create([
            'name'          => 'Salsa',
            'slug'          => 'salsa', 
            'music'         => 'Timba,Salsa salsa cubana,Rumba, Afrocuban, Mambo, Pachanga, Boogaloo, Son, Danzon',
            'family'        => 'Salsa',            
            'description'   => $faker->text,
            'color'         => 'red-800', 
            'thumbnail'     => $faker->imageUrl(640,640),
            'origin'        => 'New York, USA',
            'year'          => '1970s',
            'user_id'       => 1,
        ]);

        Style::create([
            'name'          => 'Cuban salsa',
            'slug'          => 'cuban-salsa', 
            'music'         => 'Timba,Salsa cubana,Rumba,Afrocuban',
            'family'        => 'Cuban Salsa',            
            'description'   => $faker->text,
            'color'         => 'red-800', 
            'thumbnail'     => $faker->imageUrl(640,640),
            'origin'        => 'Cuba',
            'year'          => '',
            'user_id'       => 1,
        ]);

        Style::create([
            'name'          => 'Salsa on1', 
            'slug'          => 'salsa-on1',
            'music'         => 'Salsa',
            'family'        => 'Line Salsa', 
            'description'   => $faker->text,
            'color'         => 'blue-800', 
            'thumbnail'     => $faker->imageUrl(640,640), 
            'origin'        => 'Los Angeles, USA',
            'year'          => '70\'s',
            'user_id'       => 1,
        ]);

        Style::create([
            'name'          => 'Salsa on2', 
            'slug'          => 'salsa-on2',
            'family'        => 'Line Salsa', 
            'description'   => $faker->text,
            'color'         => 'blue-700', 
            'thumbnail'     => $faker->imageUrl(640,640), 
            'origin'        => 'New York, USA',
            'year'          => '60\'s - 70\'s',
            'user_id'       => 1,
        ]);

        Style::create([
            'name'          => 'Rueda de Casino', 
            'slug'          => 'rueda-casino',
            'music'         => 'Timba, Cuban salsa, Salsa',
            'family'        => 'Cuban Salsa',
            'description'   => $faker->text,
            'color'         => 'red-700', 
            'thumbnail'     => $faker->imageUrl(640,640),
            'origin'        => 'Havana, Cuba',
            'year'          => '1950\'s',
            'user_id'       => 1,
        ]);

        Style::create([
            'name'          => 'Afro-cuban', 
            'slug'          => 'Afro-cuban', 
            'music'         => 'Afro-cuban, Timba, Cuban salsa',
            'family'        => 'Cuban Salsa',
            'description'   => $faker->text,
            'color'         => 'red-600', 
            'thumbnail'     => $faker->imageUrl(640,640),
            'origin'        => 'Cuba',
            'year'          => '',
            'user_id'       => 1,
        ]);    

        Style::create([
            'name'          => 'Son Cubano', 
            'slug'          => 'son-cubano', 
            'family'        => 'Cuban Salsa', 
            'description'   => $faker->text,
            'color'         => 'red-200', 
            'thumbnail'     => $faker->imageUrl(640,640), 
            'origin'        => 'Cuba',
            'year'          => '',
            'user_id'       => 1,
        ]);

        Style::create([
            'name'          => 'Rumba',
            'slug'          => 'rumba',
            'music'         => 'Rumba, timba, cuban salsa',
            'family'        => 'Cuban salsa',
            'description'   => $faker->text,
            'color'         => 'red-500', 
            'thumbnail'     => $faker->imageUrl(640,640),
            'origin'        => 'Cuba',
            'year'          => '19th century',
            'user_id'       => 1,
        ]);

        Style::create([
            'name'          => 'Boogaloo', 
            'slug'          => 'boogaloo', 
            'music'         => 'Funk, Soul, Salsa',
            'family'        => 'Line Salsa', 
            'description'   => 'Boogaloo is a freestyle, improvisational street dance movement of soulful steps and robotic movements which make up the foundations of popping dance and turfing; boogaloo can incorporate illusions, restriction of muscles, stops, robot and/or wiggling. The style also incorporates foundational popping techniques, which were initially referred to as "Posing Hard".It is related to the later electric boogaloo dance.',
            'color'         => 'blue-600', 
            'thumbnail'     => $faker->imageUrl(640,640), 
            'origin'        => 'Chicago, USA',
            'year'          => '1965 and 1966',
            'user_id'       => 1,
        ]);

        Style::create([
            'name'          => 'Pachanga', 
            'slug'          => 'pachange', 
            'music'         => 'Pachanga, Salsa',
            'family'        => 'Line Salsa', 
            'description'   => 'Pachanga is a genre of music which is described as a mixture of son montuno and merengue and has an accompanying signature style of dance. This type of music has a festive, lively style and is marked by jocular, mischievous lyrics. Pachanga originated in Cuba in the 1950s and played an important role in the evolution of Caribbean style music as it is today. Considered a prominent contributor to the eventual rise of salsa, Pachanga itself is an offshoot of Charanga style music.[1] Very similar in sound to Cha-Cha but with a notably stronger down-beat, Pachanga once experienced massive popularity all across the Caribbean and was brought to the United States by Cuban immigrants post World War II. This led to an explosion of Pachanga music in Cuban music clubs that influenced Latin culture in the United States for decades to come',
            'color'         => 'blue-500',
            'thumbnail'     => $faker->imageUrl(640,640), 
            'origin'        => 'Chicago, USA',
            'year'          => '1965 and 1966',
            'user_id'       => 1,
        ]);

        Style::create([
            'name'          => 'Salsa fusion', 
            'slug'          => 'salsa-fusion', 
            'family'        => 'Fusion', 
            'description'   => $faker->text,
            'color'         => 'blue-900', 
            'thumbnail'     => $faker->imageUrl(640,640), 
            'origin'        => $faker->word,
            'year'          => '2005',
            'user_id'       => 1,
        ]);
        
        Style::create([
            'name'          => 'Dancehall', 
            'slug'          => 'dancehall',
            'music'         => 'Reggae, R&B, ska, rocksteady, dub, toasting, dancehall',
            'family'        => 'Urban', 
            'description'   => 'Dancehall is a genre of Jamaican popular music that originated in the late 1970s.[4] Initially, dancehall was a more sparse version of reggae than the roots style, which had dominated much of the 1970s.[5][6] In the mid-1980s, digital instrumentation became more prevalent, changing the sound considerably, with digital dancehall (or "ragga") becoming increasingly characterized by faster rhythms. Key elements of dancehall music include its extensive use of Jamaican Patois rather than Jamaican standard English and a focus on the track instrumentals (or "riddims").',
            'color'         => 'green-700',
            'thumbnail'     => $faker->imageUrl(640,640), 
            'origin'        => 'Jamaica',
            'year'          => 'Late 70\'s',
            'user_id'       => 1,
        ]);

        Style::create([
            'name'          => 'Afro-beats', 
            'slug'          => 'afro-beats', 
            'music'         => 'Coupé Decalé, afrohouse, afrogroove',
            'family'        => 'Urban', 
            'description'   => 'Afrobeat is a music genre which involves the combination of elements of West African musical styles such as fuji music, yoruba, and highlife with American funk and jazz influences, with a focus on chanted vocals, complex intersecting rhythms, and percussion. The term was coined in the 1960s by Nigerian multi-instrumentalist and bandleader Fela Kuti, who is responsible for pioneering and popularizing the style both within and outside Nigeria. Distinct from Afrobeat is Afrobeats – a sound originating in West Africa in the 21st century, one which takes in diverse influences and is an eclectic combination of genres such as British house music, hiplife, hip hop, dancehall, soca, Jùjú music, highlife, R&B, Ndombolo, Naija beats, Azonto, and Palm-wine music. The two genres, though often conflated, are not the same.',
            'color'         => 'green-600',
            'thumbnail'     => $faker->imageUrl(640,640),         
            'origin'        => 'West African',
            'year'          => '1920s',
            'user_id'       => 1,
        ]);

        Style::create([
            'name'          => 'Hip-hop', 
            'slug'          => 'hip-hop',
            'family'        => 'Urban',
            'description'   => 'Hip-hop dance refers to street dance styles primarily performed to hip-hop music or that have evolved as part of hip-hop culture. It includes a wide range of styles primarily breaking which was created in the 1970s and made popular by dance crews in the United States. The television show Soul Train and the 1980s films Breakin, Beat Street, and Wild Style showcased these crews and dance styles in their early stages; therefore, giving hip-hop mainstream exposure. The dance industry responded with a commercial, studio-based version of hip-hop—sometimes called "new style"—and a hip-hop influenced style of jazz dance called "jazz-funk". Classically trained dancers developed these studio styles in order to create choreography from the hip-hop dances that were performed on the street. Because of this development, hip-hop dance is practiced in both dance studios and outdoor spaces.',
            'color'         => 'teal-600',
            'thumbnail'     => $faker->imageUrl(640,640),            
            'origin'        => 'USA',
            'year'          => '1970s',
            'user_id'       => 1,
        ]);        

        Style::create([
            'name'          => 'House',
            'slug'          => 'house',
            'music'         => 'House',
            'family'        => 'Urban', 
            'description'   => $faker->text,
            'color'         => 'teal-700', 
            'thumbnail'     => $faker->imageUrl(640,640), 
            'origin'        => 'Chicago and New York, USA',
            'year'          => '80\'s',
            'user_id'       => 1,
        ]);
        
        Style::create([
            'name'          => 'Streching', 
            'slug'          => 'streching', 
            'family'        => 'Sport', 
            'description'   => $faker->text,
            'color'         => 'pink-400', 
            'thumbnail'     => $faker->imageUrl(640,640), 
            'origin'        => 'India',
            'year'          => '',
            'user_id'       => 1,
        ]);

        Style::create([
            'name'          => 'Ballet', 
            'slug'          => 'ballet', 
            'family'        => 'Performance dance', 
            'description'   => $faker->text,
            'color'         => 'pink-400', 
            'thumbnail'     => $faker->imageUrl(640,640), 
            'origin'        => 'India',
            'year'          => '',
            'user_id'       => 1,
        ]);

        Style::create([
            'name'          => 'Contemporary dance', 
            'slug'          => 'contemporary-dance', 
            'family'        => 'Performance dance', 
            'description'   => 'Contemporary dance is a genre of dance performance that developed during the mid-twentieth century and has since grown to become one of the dominant genres for formally trained dancers throughout the world, with particularly strong popularity in the U.S. and Europe. Although originally informed by and borrowing from classical, modern, and jazz styles, it has come to incorporate elements from many styles of dance. Due to its technical similarities, it is often perceived to be closely related to modern dance, ballet, and other classical concert dance styles (src: wikipedia).',
            'color'         => 'pink-400', 
            'thumbnail'     => $faker->imageUrl(640,640), 
            'origin'        => 'Europe and America',
            'year'          => 'Start of the 20th century',
            'user_id'       => 1,
        ]);

        Style::create([
            'name'          => 'Tango', 
            'slug'          => 'tango', 
            'family'        => 'Tango', 
            'description'   => 'Tango is a partner dance, and social dance that originated in the 1880s along the Río de la Plata, the natural border between Argentina and Uruguay. It was born in the impoverished port areas of these countries, in neighborhoods which had predominantly African descendants. The tango is the result of a combination of Rioplatense Candombe celebrations, Spanish-Cuban Habanera, and Argentinean Milonga. The tango was frequently practiced in the brothels and bars of ports, where business owners employed bands to entertain their patrons with music. The tango then spread to the rest of the world. Many variations of this dance currently exist around the world.',
            'color'         => 'pink-400', 
            'thumbnail'     => $faker->imageUrl(640,640), 
            'origin'        => 'Argentina',
            'year'          => '1880s',
            'user_id'       => 1,
        ]);


        


// Tap
// Jazz
// Modern
// Contemporary
// Break Dance
// Swing
// Disco
// Waltz
// 
// Jerking
// Locking
// Popping
// Flamenco
// Viennese Waltz
// Quickstep
// Jive
// Boogie-woogie
// Lambada


        // Style::create([
        //     'name' => $this->faker->name,
        //     'slug' => $this->faker->slug,
        //     'icon' => $this->faker->regexify('[A-Za-z0-9]{40}'),
        //     'color' => $this->faker->regexify('[A-Za-z0-9]{40}'),
        //     'thumbnail' => $this->faker->word,
        //     'origin' => $this->faker->regexify('[A-Za-z0-9]{50}'),
        //     'family' => $this->faker->regexify('[A-Za-z0-9]{100}'),
        //     'music' => $this->faker->word,
        //     'year' => $this->faker->regexify('[A-Za-z0-9]{20}'),
        //     'video' => $this->faker->word,
        
        //     'user_id' => User::factory(),
        // ]);
    }
}
