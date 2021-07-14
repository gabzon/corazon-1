<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\City;
use App\Models\Classroom;
use App\Models\Course;
use App\Models\Organization;
use App\Models\School;
use App\Models\User;

class CourseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Course::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->randomElement(['Cuban Salsa', 'Line Salsa', 'Hip hop', 'Popping', 'Dancehall', 'Rumba', 'Sensual Bachata', 'Dominican bachata', 'Kizomba', 'Bachata Moderna', 'Bachata', 'Bachata fusion', 'Salsa Fusion']);        
        return [
            'name'          => $name,
            'slug'          => Str::slug($name, '-'),
            'excerpt'       => $this->faker->text,
            'description'       => $this->faker->text,
            'tagline'       => $this->faker->word,
            'keywords'          => $this->faker->word,
            'start_date'        => $this->faker->date(),
            'end_date'          => $this->faker->date(),
            'monday'            => $this->faker->boolean,
            'start_time_mon'    => $this->faker->time(),
            'end_time_mon'      => $this->faker->time(),
            'tuesday'           => $this->faker->boolean,
            'start_time_tue'    => $this->faker->time(),
            'end_time_tue'      => $this->faker->time(),
            'wednesday'         => $this->faker->boolean,
            'start_time_wed'    => $this->faker->time(),
            'end_time_wed'      => $this->faker->time(),
            'thursday'          => $this->faker->boolean,
            'start_time_thu'    => $this->faker->time(),
            'end_time_thu'      => $this->faker->time(),
            'friday'            => $this->faker->boolean,
            'start_time_fri'    => $this->faker->time(),
            'end_time_fri'      => $this->faker->time(),
            'saturday'          => $this->faker->boolean,
            'start_time_sat'    => $this->faker->time(),
            'end_time_sat'      => $this->faker->time(),
            'sunday'            => $this->faker->boolean,
            'start_time_sun'    => $this->faker->time(),
            'end_time_sun'      => $this->faker->time(),
            'level'             => $this->faker->randomElement(['open','beginner','intermediate', 'advanced']),
            'level_number'      => $this->faker->word,
            'duration'          => $this->faker->time(),
            'video1'            => $this->faker->text,
            'video2'            => $this->faker->text,
            'video3'            => $this->faker->text,
            'full_price'        => $this->faker->numberBetween(10,1000),
            'reduced_price'     => $this->faker->numberBetween(10,1000),
            'thumbnail'         => $this->faker->word,
            'focus'             => $this->faker->regexify('[A-Za-z0-9]{40}'),
            'type'              => $this->faker->regexify('[A-Za-z0-9]{40}'),
            'status'            => 'Active',
            'user_id'           => User::factory(),
            'classroom_id'      => Classroom::factory(),
            'city_id'           => City::factory(),
            'organization_id'   => Organization::factory(),
        ];
    }
}
