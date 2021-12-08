<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\City;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\CityController
 */
class CityControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    // public function index_displays_view()
    // {
    //     $cities = City::factory()->count(3)->create();

    //     $response = $this->get(route('city.index'));

    //     $response->assertOk();
    //     $response->assertViewIs('city.index');
    //     $response->assertViewHas('cities');
    // }


    /**
     * @test
     */
    // public function create_displays_view()
    // {
    //     $response = $this->get(route('city.create'));

    //     $response->assertOk();
    //     $response->assertViewIs('city.create');
    // }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\CityController::class,
            'store',
            \App\Http\Requests\CityStoreRequest::class
        );
    }

    /**
     * @test
     */
    // public function store_saves_and_redirects()
    // {
    //     $name = $this->faker->name;
    //     $slug = $this->faker->slug;

    //     $response = $this->post(route('city.store'), [
    //         'name' => $name,
    //         'slug' => $slug,
    //     ]);

    //     $cities = City::query()
    //         ->where('name', $name)
    //         ->where('slug', $slug)
    //         ->get();
    //     $this->assertCount(1, $cities);
    //     $city = $cities->first();

    //     $response->assertRedirect(route('city.index'));
    //     $response->assertSessionHas('city.id', $city->id);
    // }


    /**
     * @test
     */
    // public function show_displays_view()
    // {
    //     $city = City::factory()->create();

    //     $response = $this->get(route('city.show', $city));

    //     $response->assertOk();
    //     $response->assertViewIs('city.show');
    //     $response->assertViewHas('city');
    // }


    /**
     * @test
     */
    // public function edit_displays_view()
    // {
    //     $city = City::factory()->create();

    //     $response = $this->get(route('city.edit', $city));

    //     $response->assertOk();
    //     $response->assertViewIs('city.edit');
    //     $response->assertViewHas('city');
    // }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\CityController::class,
            'update',
            \App\Http\Requests\CityUpdateRequest::class
        );
    }

    /**
     * @test
     */
    // public function update_redirects()
    // {
    //     $city = City::factory()->create();
    //     $name = $this->faker->name;
    //     $slug = $this->faker->slug;

    //     $response = $this->put(route('city.update', $city), [
    //         'name' => $name,
    //         'slug' => $slug,
    //     ]);

    //     $city->refresh();

    //     $response->assertRedirect(route('city.index'));
    //     $response->assertSessionHas('city.id', $city->id);

    //     $this->assertEquals($name, $city->name);
    //     $this->assertEquals($slug, $city->slug);
    // }


    /**
     * @test
     */
    // public function destroy_deletes_and_redirects()
    // {
    //     $city = City::factory()->create();

    //     $response = $this->delete(route('city.destroy', $city));

    //     $response->assertRedirect(route('city.index'));

    //     $this->assertDeleted($city);
    // }

    // public function test_user_cannot_access_cities()
    // {
    //     $user = User::factory()->create();
                
    //     $response = $this->actingAs($user)->get('cities');
    //     $response->assertStatus(403);
    // }
}

