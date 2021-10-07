<?php

namespace Database\Seeders;

use App\Models\Event;
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
            'tagline'       => 'SENSUAL EDITION',
            'start_date'    => '2021-10-22',
            'end_date'      => '2021-10-25',
            'start_time'    => '20:00',
            'end_time'      => '00:00',
            'video'         => '<iframe width="560" height="315" src="https://www.youtube.com/embed/dm_TzKprOls" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
            'thumbnail'     => '',
            'type'          => 'festival',
            'status'        => 'Active',
            'contact'       => 'Kristina Ropus',
            'email'         => 'dkkdd@dkdkdk.com',
            'phone'         => '33 333 33 3333',
            'city_id'       => 1,
            'user_id'       => 1,
            'website'       => 'https://zagrebpassion.net',
            'facebook'      => 'https://www.facebook.com/events/2097873480505114/',
            'location_id'   => 1,
            'description'   => '🔅🔅🔅🔅🔅🔅🔅🔅🔅🔅🔅🔅🔅🔅🔅🔅
            BACHATA • URBAN KIZ • KIZOMBA
            🔅🔅🔅🔅🔅🔅🔅🔅🔅🔅🔅🔅🔅🔅🔅🔅
            Everyone wants to be part of our crazy energy and atmosphere and if you want to know why, ASK YOUR FRIENDS 😏
            Our motto I NEED TO DANCE, DANCE, DANCE is taking over! 🖤
            Mark your calendars, FUEL YOUR PASSION and DANCE IT OUT with us!!
            ☑️ 3 NIGHT PARTIES
            ☑️ SOCIAL PARTIES
            ☑️ WORKSHOPS
            ☑️ TICKETS: https://zagrebpassion.net
            ➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖
            ARTISTS, VIDEO/PHOTO, DANCERS TEAM
            ➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖
            BACHATA TEACHERS:
            * Leo y Jomante
            * Gero Dance
            * Sorush Crazy Lion
            * Lucio y Nora
            * Anita y Marko
            * Roberto Bachata Inspire
            .... more to be announced
            🎧 DJs:
            * Dj David Pedron
            * Dj Balito
            * Dj Rocco Loco
            ....more to be announced
            KIZOMBA TEACHERS:
            * Chamalo & Mirty
            * Eddy & Rita
            * Lucio
            * Michael Daimon
            * Anika
            * Titi & Ajda
            .... more to be announced
            🎧 DJs:
            * Dj Zayx
            * DJ Karl Conklass
            * Dj Brane
            .... more to be announced
            🎬 VIDEO/PHOTO:
            * Sorush Crazy Lion
            .... more to be announced
            TAXI DANCERS:
            .... to be announced
            ➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖
            TICKETS
            ➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖
            Directly link: https://zagrebpassion.net
            ★VIP PASS (includes all kizomba & bachata workshops & parties)
            ★BACHATA PASS (includes only bachata workshops & parties)
            ★KIZOMBA PASS (includes only kizomba workshops & parties)
            ❗️Money for bought passes is not refundable. You can change name on ticket without fee until 15.10.2021., BUT you CAN NOT change MEN pass to WOMEN or opposite! We need to keep good gender balance!'
        ]);
        $zpf->styles()->attach([]);
        
        Event::factory(40)->create();
    }
}


