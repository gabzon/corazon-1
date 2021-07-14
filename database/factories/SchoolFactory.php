<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\School;
use App\Models\User;

class SchoolFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = School::class;

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
            'video' => $this->faker->text,
            'logo' => $this->faker->word,
            'about' => $this->faker->text,
            'contact' => $this->faker->regexify('[A-Za-z0-9]{100}'),
            'email' => $this->faker->safeEmail,
            'phone' => $this->faker->phoneNumber,
            'website' => $this->faker->regexify('[A-Za-z0-9]{100}'),
            'company_ref' => $this->faker->word,
            'facebook' => $this->faker->word,
            'twitter' => $this->faker->word,
            'instagram' => $this->faker->word,
            'youtube' => $this->faker->word,
            'tiktok' => $this->faker->word,
            'status' => $this->faker->word,
            'user_id' => User::factory(),
        ];
    }
}
