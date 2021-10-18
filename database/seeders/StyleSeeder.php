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
            'description'   => 'In Cuba, a popular dance known as Casino was marketed abroad as Cuban-style salsa or Salsa Cubana to distinguish it from other salsa styles when the name was popularized in the 1970s. Dancing Casino is an expression of popular social culture in Cuba and many Cubans consider casino a part of their social and cultural activities centering on their popular music. (source: wikipedia)',
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
            'description'   => 'Los Angeles style salsa (LA style) is danced "on 1" where dancers break forward on the first beat of the music, in contrast to New York style which is danced on 2. LA style salsa is danced in a line or "slot" with dancers exchanging positions throughout the dance, unlike Cuban salsa which is danced in a more circular fashion. (source: wikipedia)',
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
            'description'   => 'New York style salsa is a linear form of salsa, where dancers dance in a slot, similar to LA style salsa. Unlike other styles of salsa, however, New York style is danced on the second beat of the music ("on 2"), and the follower, not the leader, steps forward on the first measure of the music. (source: wikipedia)',
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
            'description'   => 'Casino is different from other types of Salsa dance styles because of its spontaneous use of the rich Afro-Cuban dance vocabulary within a Casino dance; a Casino dancer frequently improvises references to other dances, integrating movements, gestures and extended passages from the folkloric and popular heritage. This is particularly true of African descended Cubans. Such improvisations might include extracts of rumba, dances for African deities (Orishas), the older popular dances such as Cha Cha Cha and Danzón as well as anything the dancer may feel. (source: wikipedia)',
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
            'description'   => 'The mambo, the cha-cha-cha, salsa and of course the rumba – Afro Cuban dance has had a global impact that continues to influence today. Learn how these dances, a legacy of Cuba\'s slave trade, have escaped suppression to become a defining symbol of Cuban identity and culture. (source: wikipedia)',
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
            'description'   => 'Son cubano is a genre of music and dance that originated in the highlands of eastern Cuba during the late 19th century. It is a syncretic genre that blends elements of Spanish and African origin. Among its fundamental Hispanic components are the vocal style, lyrical metre and the primacy of the tres, derived from the Spanish guitar. On the other hand, its characteristic clave rhythm, call and response structure and percussion section (bongo, maracas, etc.) are all rooted in traditions of Bantu origin (source: wikipedia)',
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
            'description'   => 'Rumba is a secular genre of Cuban music involving dance, percussion, and song. It originated in the northern regions of Cuba, mainly in urban Havana and Matanzas, during the late 19th century. It is based on African music and dance traditions, namely Abakuá and yuka, as well as the Spanish-based coros de clave. (source: wikipedia)',
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
            'description'   => 'Boogaloo is a freestyle, improvisational street dance movement of soulful steps and robotic movements which make up the foundations of popping dance and turfing; boogaloo can incorporate illusions, restriction of muscles, stops, robot and/or wiggling. The style also incorporates foundational popping techniques, which were initially referred to as "Posing Hard".It is related to the later electric boogaloo dance. (source: wikipedia)',
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
            'description'   => 'Pachanga is a genre of music which is described as a mixture of son montuno and merengue and has an accompanying signature style of dance. This type of music has a festive, lively style and is marked by jocular, mischievous lyrics. Pachanga originated in Cuba in the 1950s and played an important role in the evolution of Caribbean style music as it is today. Considered a prominent contributor to the eventual rise of salsa, Pachanga itself is an offshoot of Charanga style music.[1] Very similar in sound to Cha-Cha but with a notably stronger down-beat, Pachanga once experienced massive popularity all across the Caribbean and was brought to the United States by Cuban immigrants post World War II. This led to an explosion of Pachanga music in Cuban music clubs that influenced Latin culture in the United States for decades to come (source: wikipedia)',
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
            'description'   => 'Salsa Fusion blends together the steps and rhythms of salsa styles from as far afield as Colombia, Cuba, Puerto Rico and New York, breaking down the movements into individual steps. (source: wikipedia)',
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
            'description'   => 'Dancehall is a genre of Jamaican popular music that originated in the late 1970s.[4] Initially, dancehall was a more sparse version of reggae than the roots style, which had dominated much of the 1970s.[5][6] In the mid-1980s, digital instrumentation became more prevalent, changing the sound considerably, with digital dancehall (or "ragga") becoming increasingly characterized by faster rhythms. Key elements of dancehall music include its extensive use of Jamaican Patois rather than Jamaican standard English and a focus on the track instrumentals (or "riddims"). (source: wikipedia)',
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
            'description'   => 'Afrobeat is a music genre which involves the combination of elements of West African musical styles such as fuji music, yoruba, and highlife with American funk and jazz influences, with a focus on chanted vocals, complex intersecting rhythms, and percussion. The term was coined in the 1960s by Nigerian multi-instrumentalist and bandleader Fela Kuti, who is responsible for pioneering and popularizing the style both within and outside Nigeria. Distinct from Afrobeat is Afrobeats – a sound originating in West Africa in the 21st century, one which takes in diverse influences and is an eclectic combination of genres such as British house music, hiplife, hip hop, dancehall, soca, Jùjú music, highlife, R&B, Ndombolo, Naija beats, Azonto, and Palm-wine music. The two genres, though often conflated, are not the same. (source: wikipedia)',
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
            'description'   => 'Hip-hop dance refers to street dance styles primarily performed to hip-hop music or that have evolved as part of hip-hop culture. It includes a wide range of styles primarily breaking which was created in the 1970s and made popular by dance crews in the United States. The television show Soul Train and the 1980s films Breakin, Beat Street, and Wild Style showcased these crews and dance styles in their early stages; therefore, giving hip-hop mainstream exposure. The dance industry responded with a commercial, studio-based version of hip-hop—sometimes called "new style"—and a hip-hop influenced style of jazz dance called "jazz-funk". Classically trained dancers developed these studio styles in order to create choreography from the hip-hop dances that were performed on the street. Because of this development, hip-hop dance is practiced in both dance studios and outdoor spaces. (source: wikipedia)',
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
            'description'   => 'House dance is a freestyle street dance and social dance that has roots in the underground house music scene of Chicago and New York.[1][2] It is typically danced to loud and bass-heavy electronic dance music provided by DJs in nightclubs or at raves.The main elements of House dance include "jacking", "footwork", and "lofting".[3] The element of "jacking", or the "jack", – an ecstatic, sex-driven rippling movement of the torso – is the most famous dance move associated with early house music.[4][5] It has found its way onto numerous record titles like the Jack Trax EP by Chip E. (1985), "Jack\'n the House" (1985) by Farley "Jackmaster" Funk (1985), "Jack Your Body" by Steve "Silk" Hurley (1986), or "Jack to the Sound of the Underground" by Fast Eddie (1988). (source: wikipedia)',
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
            'description'   => 'Ballet (French: [balɛ]) is a type of performance dance that originated during the Italian Renaissance in the fifteenth century and later developed into a concert dance form in France and Russia. It has since become a widespread and highly technical form of dance with its own vocabulary. Ballet has been influential globally and has defined the foundational techniques which are used in many other dance genres and cultures. (source: wikipedia)',
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

        Style::create([
            'name'          => 'English Waltz', 
            'slug'          => '', 
            'family'        => 'Ballroom', 
            'description'   => 'Waltz began as a country folk dance in Austria and Bavaria in the 17th century. In the early 19th century it was introduced in England. It was the first dance where a man held a woman close to his body. When performing the dance, the upper body is kept to the left throughout all figures, follow\'s body leaves the right side of the lead while the head is extended to follow the elbow. Figures with rotation have little rise. The start of the rise begins slowly from the first count, peaks on the 2nd count and lowers slowly on the 3rd.',
            'color'         => '', 
            'thumbnail'     => $faker->imageUrl(640,640), 
            'origin'        => 'Austria',
            'year'          => '1601s',
            'user_id'       => 1,
        ]);

        Style::create([
            'name'          => 'Viennese Waltz', 
            'slug'          => 'viennese-waltz', 
            'family'        => 'Ballroom', 
            'description'   => 'Viennese waltz originated in Provence area in France in 1559 and is recognized as the oldest of all ballroom dances. It was introduced in England as German waltz in 1812 and became popular throughout the 19th century by the music of Josef and Johann Strauss. It is often referred to as the classic “old-school” ballroom. Viennese Waltz music is quite fast. Slight shaping of the body moves towards the inside of the turn and shaping forward and up to lengthen the opposite side from direction. (source: wikipedia)',
            'color'         => '', 
            'thumbnail'     => $faker->imageUrl(640,640), 
            'origin'        => 'France',
            'year'          => '1559s',
            'user_id'       => 1,
        ]);

        Style::create([
            'name'          => 'Foxtrot', 
            'slug'          => 'foxtrot', 
            'family'        => 'Ballroom', 
            'description'   => 'The foxtrot is an American dance, believed to be of African-American origin. It was named by a vaudeville performer Harry Fox in 1914. Fox was rapidly trotting step to ragtime music. The dance therefore was originally named as the “Fox’s trot”. The foxtrot can be danced at slow, medium, or fast tempos depending on the speed of the jazz or big band music. The partners are facing one another and frame rotates from one side to another, changing direction after a measure. The dance is flat, with no rise and fall. The walking steps are taken as slow for the two beats per steps and quick for one beat per step. (source: wikipedia)',
            'color'         => '', 
            'thumbnail'     => $faker->imageUrl(640,640), 
            'origin'        => 'African-American',
            'year'          => '1914',
            'user_id'       => 1,
        ]);

        Style::create([
            'name'          => 'Quickstep', 
            'slug'          => 'quickstep', 
            'family'        => 'Ballroom', 
            'description'   => 'The quickstep is an English dance and was invented in the 1920s as a combination of faster tempo of foxtrot and the Charleston. It is a fast moving dance, so men are allowed to close their feet and the couples move in short syncopated steps. Quickstep includes the walks, runs, chasses, and turns of the original foxtrot dance, with some other fast figures such as locks, hops, run, quick step, jump and skips (source:  wikipedia)',
            'color'         => '', 
            'thumbnail'     => $faker->imageUrl(640,640), 
            'origin'        => 'England',
            'year'          => '1920s',
            'user_id'       => 1,
        ]);

        Style::create([
            'name'          => 'Pasodoble', 
            'slug'          => 'pasodoble', 
            'family'        => 'Ballroom', 
            'description'   => 'The pasodoble originated from Spain and its dramatic bullfights. The dance is mostly performed only in competitions and rarely socially because of its many choreographic rules. The lead plays the role of the matador while the follow takes the role of the matador\'s cape, the bull, or even the matador. The chassez cape refers to the lead using the follow to turn them as if they are the cape, and the apel is when the lead stomps their foot to get the bull\'s attention. (source: wikipedia)',
            'color'         => '', 
            'thumbnail'     => $faker->imageUrl(640,640), 
            'origin'        => 'Spain',
            'year'          => '1920s',
            'user_id'       => 1,
        ]);
        Style::create([
            'name'          => 'Cuban bolero', 
            'slug'          => 'cuban-bolero', 
            'family'        => 'Bolero, Timba', 
            'music'         => 'Trova',
            'description'   => 'Although Cuban bolero was born as a form of trova, traditional singer/songwriter tradition from eastern Cuba, with no associated dance, it soon became a ballroom favorite in Cuba and all of Latin America. The dance most commonly represents the couple falling in love. Modern bolero is seen as a combination of many dances: like a slow salsa with contra-body movement of tango, patterns of rhumba, and rise and fall technique and personality of waltz and foxtrot. (source: wikipedia)',
            'color'         => '', 
            'thumbnail'     => $faker->imageUrl(640,640), 
            'origin'        => 'Cuba',
            'year'          => '1880s',
            'user_id'       => 1,
        ]);

        Style::create([
            'name'          => 'Samba', 
            'slug'          => 'samba', 
            'music'         => 'Samba, Maxixe',
            'family'        => 'Samba', 
            'description'   => 'Samba is the national dance of Brazil. The rhythm of samba and its name originated from the language and culture of West African slaves. In 1905, samba became known to other countries during an exhibition in Paris. In the 1940s, samba was introduced in America through Carmen Miranda. The international version of Ballroom Samba has been based on an early version of Brazilian Samba called Maxixe, but has since developed away and differs strongly from Brazilian Ballroom Samba, which is called Samba de Gafieira (source: wikipedia)',
            'color'         => '', 
            'thumbnail'     => $faker->imageUrl(640,640), 
            'origin'        => 'Brazil',
            'year'          => '1868',
            'user_id'       => 1,
        ]);

        Style::create([
            'name'          => 'Ballroom rumba', 
            'slug'          => 'ballroom-rumba', 
            'music'         => 'Son, American ballroom',
            'family'        => 'Ballroom', 
            'description'   => 'Rhumba came to the United States from Cuba in the 1920s and became a popular cabaret dance during prohibition. Rhumba is a ballroom adaptation of son cubano and bolero (the Cuban genre) and, despite its name, it rarely included elements of Cuban rumba.[19] It includes Cuban motions through knee-strengthening, figure-eight hip rotation, and swiveling foot action. An important characteristic of rhumba is the powerful and direct lead achieved through the ball of the foot. (source: wikipedia)',
            'color'         => '', 
            'thumbnail'     => $faker->imageUrl(640,640), 
            'origin'        => 'America',
            'year'          => '1930s',
            'user_id'       => 1,
        ]);

        Style::create([
            'name'          => 'Cha cha cha', 
            'slug'          => 'cha-cha-cha', 
            'family'        => 'Salsa', 
            'description'   => 'The cha-cha-cha (also called cha-cha), is a dance of Cuban origin. It is danced to the music of the same name introduced by Cuban composer and violinist Enrique Jorrin in the early 1950s. This rhythm was developed from the danzón-mambo. The name of the dance is an onomatopoeia derived from the shuffling sound of the dancers\' feet when they dance two consecutive quick steps (correctly, on the fourth count of each measure) that characterize the dance. (source: wikipedia)',
            'color'         => '', 
            'thumbnail'     => $faker->imageUrl(640,640), 
            'origin'        => 'Cuba',
            'year'          => '1950s',
            'user_id'       => 1,
        ]);

        Style::create([
            'name'          => 'Jive', 
            'slug'          => 'jive', 
            'family'        => 'Ballroom', 
            'description'   => 'The jive is part of the swing dance group and is a very lively variation of the jitterbug. Jive originated from African American clubs in the early 1940s. During World War II, American soldiers introduced the jive in England where it was adapted to today\'s competitive jive. In jive, the man leads the dance while the woman encourages the man to ask them to dance. It is danced to big band music, and some technique is taken from salsa, swing and tango. (source: wikipedia)',
            'color'         => '', 
            'thumbnail'     => $faker->imageUrl(640,640), 
            'origin'        => 'African-American',
            'year'          => '1940s',
            'user_id'       => 1,
        ]);

        Style::create([
            'name'          => 'Lindy Hop', 
            'slug'          => 'lindy-hop', 
            'music'         => '',
            'family'        => 'Swing', 
            'description'   => 'The Lindy Hop is an American dance which was born in the African-American communities in Harlem, New York City, in 1928 and has evolved since then. It was very popular during the swing era of the late 1930s and early 1940s. Lindy was a fusion of many dances that preceded it or were popular during its development but is mainly based on jazz, tap, breakaway, and Charleston. (source: wikipedia)',
            'color'         => '', 
            'thumbnail'     => $faker->imageUrl(640,640), 
            'origin'        => 'America',
            'year'          => '1928',
            'user_id'       => 1,
        ]);

        Style::create([
            'name'          => 'Balboa', 
            'slug'          => 'balboa', 
            'music'         => '',
            'family'        => 'Swing', 
            'description'   => 'Balboa came from Southern California during the 1920s. Balboa is named after the Balboa Peninsula in Newport Beach, California, where the dance was invented.[1] The Balboa Pavilion, and the Rendezvous Ballroom are credited as the birthplaces of Balboa when dance floors became so crowded that dancers invented a dance to swing music that could be danced in place. (source: wikipedia)',
            'color'         => '', 
            'thumbnail'     => $faker->imageUrl(640,640), 
            'origin'        => 'California, USA',
            'year'          => '1920s',
            'user_id'       => 1,
        ]);

        Style::create([
            'name'          => 'Charleston', 
            'slug'          => 'charleston', 
            'music'         => '',
            'family'        => 'Swing', 
            'description'   => 'The Charleston is a dance named after the harbor city of Charleston, South Carolina. The rhythm was popularized in mainstream dance music in the United States by a 1923 tune called "The Charleston" by composer/pianist James P. Johnson, which originated in the Broadway show Runnin\' Wild and became one of the most popular hits of the decade (source: wikipedia)',
            'color'         => '', 
            'thumbnail'     => $faker->imageUrl(640,640), 
            'origin'        => 'California, USA',
            'year'          => '1923',
            'user_id'       => 1,
        ]);

        Style::create([
            'name'          => 'Rock and roll', 
            'slug'          => 'rock-and-roll', 
            'music'         => '',
            'family'        => 'Swing', 
            'description'   => 'Acrobatic Rock\'n\'Roll is a very athletic, competitive form of partner dance that originated from lindy hop. Unlike lindy hop, however, it is a choreographed dance designed for performance. It is danced by both couples (usually of mixed gender) and groups, either all-female or four to eight couples together. This is normally a very fast and physically demanding dance. (source: wikipedia)',
            'color'         => '', 
            'thumbnail'     => $faker->imageUrl(640,640), 
            'origin'        => 'USA',
            'year'          => '1940s',
            'user_id'       => 1,
        ]);

        Style::create([
            'name'          => 'Cumbia', 
            'slug'          => 'cumbia', 
            'music'         => 'Cumbia, Folk dance',
            'family'        => '', 
            'description'   => 'Cumbia refers to a number of musical rhythm and folk dance traditions of Latin America, generally involving musical and cultural elements from Amerindians, Africans enslaved during colonial times and Europeans. (source: wikipedia)',
            'color'         => '', 
            'thumbnail'     => $faker->imageUrl(640,640), 
            'origin'        => 'Latin America',
            'year'          => '',
            'user_id'       => 1,
        ]);

        Style::create([
            'name'          => 'Merengue', 
            'slug'          => 'merengue', 
            'music'         => 'Merengue, folk dance',
            'family'        => 'Latin', 
            'description'   => 'Merengue (/məˈrɛŋɡeɪ/, Spanish: [meˈɾeŋɡe]) is a style of Dominican music and dance. Partners hold each other in a closed position. The leader holds the follower\'s waist with the leader\'s right hand, while holding the follower\'s right hand with the leader\'s left hand at the follower\'s eye level. (source: wikipedia)',
            'color'         => '', 
            'thumbnail'     => $faker->imageUrl(640,640), 
            'origin'        => 'Dominican Republic',
            'year'          => '1940s',
            'user_id'       => 1,
        ]);

        Style::create([
            'name'          => 'Bachata', 
            'slug'          => 'bachata', 
            'music'         => 'Bachata',
            'family'        => 'Bachata', 
            'description'   => 'Bachata is a genre of Latin American music that originated in the Dominican Republic in the first half of the 20th century. It is a fusion of European influences, mainly Spanish guitar music, with some remnants of indigenous Taino and African musical elements, representative of the cultural diversity of the Dominican population. (source: wikipedia)',
            'color'         => '', 
            'thumbnail'     => $faker->imageUrl(640,640), 
            'origin'        => 'Dominican Republic',
            'year'          => '1980s',
            'user_id'       => 1,
        ]);

        Style::create([
            'name'          => 'Bachata Moderna', 
            'slug'          => 'bachata-moderna', 
            'music'         => 'Bachata',
            'family'        => 'Bachata', 
            'description'   => 'Bachata is a genre of Latin American music that originated in the Dominican Republic in the first half of the 20th century. It is a fusion of European influences, mainly Spanish guitar music, with some remnants of indigenous Taino and African musical elements, representative of the cultural diversity of the Dominican population. (source: wikipedia)',
            'color'         => '', 
            'thumbnail'     => $faker->imageUrl(640,640), 
            'origin'        => 'Dominican Republic',
            'year'          => '1980s',
            'parent_id'     => 36,
            'user_id'       => 1,
        ]);

        Style::create([
            'name'          => 'Sensual Bachata', 
            'slug'          => 'sensual-bachata', 
            'music'         => 'Bachata',
            'family'        => 'Bachata', 
            'description'   => 'Bachata is a genre of Latin American music that originated in the Dominican Republic in the first half of the 20th century. It is a fusion of European influences, mainly Spanish guitar music, with some remnants of indigenous Taino and African musical elements, representative of the cultural diversity of the Dominican population. (source: wikipedia)',
            'color'         => '', 
            'thumbnail'     => $faker->imageUrl(640,640), 
            'origin'        => 'Dominican Republic',
            'year'          => '1980s',
            'parent_id'     => 36,
            'user_id'       => 1,
        ]);

        Style::create([
            'name'          => 'Dominican Bachata', 
            'slug'          => 'Dominican bachata', 
            'music'         => 'Bachata',
            'family'        => 'Bachata', 
            'description'   => 'Bachata is a genre of Latin American music that originated in the Dominican Republic in the first half of the 20th century. It is a fusion of European influences, mainly Spanish guitar music, with some remnants of indigenous Taino and African musical elements, representative of the cultural diversity of the Dominican population. (source: wikipedia)',
            'color'         => '', 
            'thumbnail'     => $faker->imageUrl(640,640), 
            'origin'        => 'Dominican Republic',
            'year'          => '1980s',
            'parent_id'     => 36,
            'user_id'       => 1,
        ]);

        Style::create([
            'name'          => 'Bachata Fusion', 
            'slug'          => 'bachata Fusion', 
            'music'         => 'Bachata',
            'family'        => 'Bachata', 
            'description'   => 'Bachata is a genre of Latin American music that originated in the Dominican Republic in the first half of the 20th century. It is a fusion of European influences, mainly Spanish guitar music, with some remnants of indigenous Taino and African musical elements, representative of the cultural diversity of the Dominican population. (source: wikipedia)',
            'color'         => '', 
            'thumbnail'     => $faker->imageUrl(640,640), 
            'origin'        => 'Dominican Republic',
            'year'          => '1980s',
            'parent_id'     => 36,
            'user_id'       => 1,
        ]);

        Style::create([
            'name'          => 'Reggaeton', 
            'slug'          => 'reggaeton', 
            'music'         => 'Reggaeton, Reggae, Dancehall ',
            'family'        => 'Reggaeton', 
            'description'   => 'Reggaeton (špa. reguetón i reggaetón) je vrsta dance glazbe, koja je postala vrlo popularna u Latinskoj Americi početkom 90-ih godina 20. stoljeća. Početkom 21. stoljeća, reggaeton se širi i na prostore Sjeverne Amerike, Europe, Azije i Australije. To je kombinacija glazbe s Jamajke (reggae i dance hall glazbe), kao i bomba i plena ritmova Latinske Amerike i hip-hopa Sjeverne Amerike. Rap, sastavni dio reggaetona je uglavnom na španjolskom.  (source: wikipedia)',
            'color'         => '', 
            'thumbnail'     => $faker->imageUrl(640,640), 
            'origin'        => 'Puerto Rico',
            'year'          => '1970s',
            'user_id'       => 1,
        ]);

        Style::create([
            'name'          => 'Kizomba', 
            'slug'          => 'kizomba', 
            'music'         => 'kizomba',
            'family'        => 'Kizomba', 
            'description'   => '(source: wikipedia)',
            'color'         => '', 
            'thumbnail'     => $faker->imageUrl(640,640), 
            'origin'        => 'Angola',
            'year'          => '',
            'user_id'       => 1,
        ]);


        Style::create([
            'name'          => 'Urban kiz', 
            'slug'          => 'urban-kiz', 
            'music'         => 'kizomba, urban kiz',
            'family'        => 'kizomba', 
            'description'   => '(source: wikipedia)',
            'color'         => '', 
            'thumbnail'     => $faker->imageUrl(640,640), 
            'origin'        => '',
            'year'          => '',
            'user_id'       => 1,
        ]);

        Style::create([
            'name'          => 'Semba', 
            'slug'          => 'semba', 
            'music'         => 'semba',
            'family'        => 'Kizomba', 
            'description'   => '(source: wikipedia)',
            'color'         => '', 
            'thumbnail'     => $faker->imageUrl(640,640), 
            'origin'        => '',
            'year'          => '',
            'user_id'       => 1,
        ]);

        Style::create([
            'name'          => 'Funk', 
            'slug'          => 'funk', 
            'music'         => 'funk',
            'family'        => 'funk', 
            'description'   => '(source: wikipedia)',
            'color'         => '', 
            'thumbnail'     => $faker->imageUrl(640,640), 
            'origin'        => '',
            'year'          => '',
            'user_id'       => 1,
        ]);

        Style::create([
            'name'          => 'Waacking', 
            'slug'          => 'waacking', 
            'music'         => 'funk',
            'family'        => 'urban', 
            'description'   => '(source: wikipedia)',
            'color'         => '', 
            'thumbnail'     => $faker->imageUrl(640,640), 
            'origin'        => '',
            'year'          => '',
            'user_id'       => 1,
        ]);

        Style::create([
            'name'          => 'Locking', 
            'slug'          => 'locking', 
            'music'         => 'funk',
            'family'        => 'urban', 
            'description'   => '(source: wikipedia)',
            'color'         => '', 
            'thumbnail'     => $faker->imageUrl(640,640), 
            'origin'        => '',
            'year'          => '',
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
// 
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
