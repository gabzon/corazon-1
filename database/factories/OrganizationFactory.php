<?php

namespace Database\Factories;

use App\Models\Organization;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrganizationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Organization::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'          => $this->faker->company,
            'slug'          => $this->faker->slug,
            'video'         => '<iframe width="100%" height="500" src="https://www.youtube.com/embed/cw-_SnN5esg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
            'logo'          => $this->faker->imageUrl(640, 640),
            'about'         => $this->faker->paragraph(3),
            'contact'       => $this->faker->name(),
            'email'         => $this->faker->safeEmail,
            'phone'         => $this->faker->phoneNumber,
            'website'       => $this->faker->url,
            'oid'           => $this->faker->numberBetween(0,99999),
            'facebook'      => $this->faker->url,
            'twitter'       => $this->faker->url,
            'instagram'     => $this->faker->url,
            'youtube'       => $this->faker->url,
            'tiktok'        => $this->faker->url,
            'status'        => $this->faker->randomElement(["active","inactive","standby","bankrupt"]),
            'type'          => $this->faker->randomElement(["school","business","organizer","association"]),
            'address'       => $this->faker->streetAddress,
            'address_info'  => $this->faker->optional()->address,
            'postal_code'   => $this->faker->postcode,        
            'lat'           => $this->faker->latitude,
            'lng'           => $this->faker->longitude,
            'city_id'       => $this->faker->randomElement([1,2,3,4]),
            'user_id'       => 1,
        ];
    }
}

