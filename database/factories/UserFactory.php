<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $gender = $this->faker->randomElement(['male', 'female']);

        $name = $this->faker->name('male');
        $picture = 'https://randomuser.me/api/portraits/men/' . rand(1,99) . '.jpg';
    
        if ($gender === 'female') {
            $name = $this->faker->name('female');
            $picture = 'https://randomuser.me/api/portraits/women/' . rand(1,99) . '.jpg';
        }

        return [
            'name'                  => $name,
            'email'                 => $this->faker->unique()->safeEmail,
            'email_verified_at'     => now(),
            'password'              => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token'        => Str::random(10),
            'gender'                => $gender,
            'profile_photo_path'    => $picture,
            'username'              => $this->faker->userName,
            'birthday'              => $this->faker->date('Y-m-d', '2002-01-01'),                        
            'profession'            => $this->faker->jobTitle,
            'biography'             => $this->faker->paragraph(3),
            'work_status'           => $this->faker->randomElement(['employed','student','unemployed','retired']),
            'unemployement_proof'   => null,
            'unemployement_expiry_date' => null,
            'work_status_verified'  => $this->faker->boolean(80),
            'mobile'                => $this->faker->phoneNumber,
            'phone'                 => $this->faker->e164PhoneNumber,
            'mobile_verified_at'    => $this->faker->date('Y-m-d'),
            'phone_verified_at'     => $this->faker->date('Y-m-d'),
            'price_hour'            => null,
            'address'               => $this->faker->streetAddress,
            'address_info'          => $this->faker->optional()->word,
            'postal_code'           => $this->faker->postcode,
            'city'                  => $this->faker->randomElement(['Zagreb','Split','Osijek','Zadar', 'Pula','Sibenik','Rijeka','Rovinj']),
            'state'                 => $this->faker->postcode,
            'country'               => 'Croatia',
            'lat'                   => $this->faker->latitude,
            'lng'                   => $this->faker->longitude,
            'facebook'              => 'https://www.facebook.com/' . $this->faker->unique()->url,
            'instagram'             => 'https://www.instagram.com/' . $this->faker->unique()->url,
            'youtube'               => 'https://www.youtube.com/' . $this->faker->unique()->url,
            'tiktok'                => 'https://www.tiktok.com/' . $this->faker->unique()->url,
            'twitter'               => 'https://www.twitter.com/' . $this->faker->unique()->url,
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}