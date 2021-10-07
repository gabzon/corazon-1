<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\City;
use App\Models\Location;
use App\Models\Event;
use App\Models\User;
use Carbon\Carbon;

class EventFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Event::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $type       = $this->faker->randomElement(['party', 'workshop', 'bootcamp', 'festival', 'concert']);
        // $status     = $this->faker->randomElement(['active', 'soon', 'expired', 'draft']);
        $currency   = $this->faker->randomElement(['eur','hrk','usd']);

        return [
            'name'          => $this->faker->name,
            'slug'          => $this->faker->slug,
            'description'   => $this->faker->text,
            'start_date'    => Carbon::now()->addWeeks(1),
            'end_date'      => Carbon::now()->addWeeks(2),
            'start_time'    => $this->faker->time(),
            'end_time'      => $this->faker->time(),
            'video'         => $this->faker->text,
            'thumbnail'     => $this->faker->word,
            'type'          => $type,
            'status'        => 'active',
            'organiser'     => $this->faker->regexify('[A-Za-z0-9]{100}'),
            'contact'       => $this->faker->name,
            'email'         => $this->faker->safeEmail,
            'phone'         => $this->faker->phoneNumber,
            'website'       => $this->faker->unique()->url,
            'facebook'      => $this->faker->unique()->url,
            'twitter'       => $this->faker->word,
            'instagram'     => $this->faker->word,
            'youtube'       => $this->faker->word,
            'tiktok'        => $this->faker->word,
            'user_id'       => User::factory(),
            'location_id'   => Location::all()->random()->first(),
            'city_id'       => City::all()->random()->first(),
        ];
    }
    
}


