<?php

namespace Database\Factories;

use App\Models\City;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Location;
use App\Models\User;

class LocationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Location::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $neighborhood = $this->faker->randomElement(['podsljeme','sesvete','maksimir','ćrnomerec','trnje','novi zagreb iztok','novi zagreb-zapad','donja dubrava','stenjevec']);
        return [
            'name'                  => $this->faker->company,
            'slug'                  => $this->faker->slug,
            'shortname'             => $this->faker->word,
            'address'               => $this->faker->streetAddress,
            'address_info'          => $this->faker->streetSuffix,
            'zip'                   => $this->faker->postcode,            
            'neighborhood'          => $neighborhood,            
            'comments'              => $this->faker->text,
            'contact'               => $this->faker->name,
            'website'               => $this->faker->url,
            'email'                 => $this->faker->safeEmail,
            'phone'                 => $this->faker->phoneNumber,
            'contract'              => $this->faker->file(database_path('data')),
            'video'                 => '<iframe width="100%" height="215" src="https://www.youtube.com/embed/X_YVeB6JLb0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
            'entry_code'            => $this->faker->word,
            'google_maps_shortlink' => $this->faker->url,
            'google_maps'           => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2781.883646308633!2d15.955561715896785!3d45.79355871942633!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4765d71555555555%3A0xa833ef50ea5717e7!2sBuena%20Vista%20Club%20Zagreb!5e0!3m2!1sen!2shr!4v1619184594286!5m2!1sen!2shr" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
            'public_transportation' => $this->faker->text(50),
            'user_id'               => User::factory(),
            'city_id'               => City::factory(),
        ];
    }
}
