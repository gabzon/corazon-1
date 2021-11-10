<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Order;
use App\Models\User;

class OrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Order::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id'               => User::factory(),
            'subtotal'              => $this->faker->randomFloat(2, 0, 999999.),
            'vat'                   => $this->faker->randomFloat(0, 0, 999999.),
            'quantity_discount'     => $this->faker->randomFloat(0, 0, 999999.),
            'user_status_discount'  => $this->faker->randomFloat(0, 0, 999999.),
            'coupon_discount'       => $this->faker->randomFloat(0, 0, 999999.),
            'coupon_code'           => $this->faker->word,
            'total'                 => $this->faker->randomFloat(0, 0, 999999.),
            'comments'              => $this->faker->text,
            'method'                => $this->faker->word,
            'status'                => $this->faker->randomElement(["open","canceled","paid","expired","partial"]),
            'author_id'             => User::factory(),
        ];
    }
}