<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Setting;

class SettingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Setting::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'price' => $this->faker->randomFloat(0, 0, 9999999999.),
            'reduced_price' => $this->faker->randomFloat(0, 0, 9999999999.),
            'currency' => $this->faker->regexify('[A-Za-z0-9]{20}'),
        ];
    }
}
