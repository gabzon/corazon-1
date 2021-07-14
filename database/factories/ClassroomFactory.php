<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Classroom;
use App\Models\Location;
use App\Models\User;

class ClassroomFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Classroom::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'slug' => $this->faker->slug,
            'm2' => $this->faker->randomDigit(),
            'capacity' => $this->faker->numberBetween(2, 100),
            'limit_couples' => $this->faker->numberBetween(4, 40),
            'price_hour' => $this->faker->numberBetween(10,1000),
            'price_month' => $this->faker->numberBetween(2,1000),
            'dance_shoes' => $this->faker->boolean,
            'comments' => $this->faker->text,
            'color' => $this->faker->word,
            'location_id' => Location::factory(),
            'user_id' => User::factory(),
        ];
    }
}
