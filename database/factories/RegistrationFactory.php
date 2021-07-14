<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Course;
use App\Models\Order;
use App\Models\Registration;
use App\Models\User;

class RegistrationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Registration::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'status' => $this->faker->randomElement(["waiting","pre-registered","registered","canceled","standby","open","partial","rejected"]),
            'role' => $this->faker->randomElement(["instructor","assistant","student"]),
            'option' => $this->faker->word,
            'course_id' => Course::factory(),
            'user_id' => User::factory(),
            'order_id' => Order::factory(),
        ];
    }
}
