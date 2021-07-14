<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Style;
use App\Models\User;

class StyleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Style::class;

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
            'icon' => $this->faker->regexify('[A-Za-z0-9]{40}'),
            'color' => $this->faker->regexify('[A-Za-z0-9]{40}'),
            'thumbnail' => $this->faker->word,
            'origin' => $this->faker->regexify('[A-Za-z0-9]{50}'),
            'family' => $this->faker->regexify('[A-Za-z0-9]{100}'),
            'music' => $this->faker->word,
            'year' => $this->faker->regexify('[A-Za-z0-9]{20}'),
            'video' => $this->faker->word,
            'description' => $this->faker->text,
            'user_id' => User::factory(),
        ];
    }
}
