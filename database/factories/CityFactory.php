<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\City;

class CityFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = City::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $this->faker = $this->withFaker();
        
        return [
            'name'          => $this->faker->city,
            'slug'          => Str::slug($this->faker->city, '-'),
            'description'   => $this->faker->paragraphs(3, true),
            'state'         => $this->faker->state,
            'region'        => $this->faker->word,
            'subregion'     => $this->faker->word,
            'code'          => $this->faker->regexify('[A-Za-z0-9]{20}'),
            'lng'           => $this->faker->longitude,
            'lat'           => $this->faker->latitude,
            'zip'           => $this->faker->postcode,
            'country'       => $this->faker->country,
            'alpha2Code'    => $this->faker->regexify('[A-Za-z0-9]{20}'),
            'alpha3Code'    => $this->faker->regexify('[A-Za-z0-9]{20}'),
            'iataCode'      => $this->faker->regexify('[A-Za-z0-9]{20}'),
        ];
    }
}

