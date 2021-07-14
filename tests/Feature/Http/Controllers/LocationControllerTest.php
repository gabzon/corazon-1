<?php

namespace Tests\Feature\Http\Controllers;

use App\Location;
use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\LocationController
 */
class LocationControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $locations = Location::factory()->count(3)->create();

        $response = $this->get(route('location.index'));

        $response->assertOk();
        $response->assertViewIs('location.index');
        $response->assertViewHas('locations');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('location.create'));

        $response->assertOk();
        $response->assertViewIs('location.create');
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\LocationController::class,
            'store',
            \App\Http\Requests\LocationStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $name = $this->faker->name;
        $slug = $this->faker->slug;
        $user = User::factory()->create();

        $response = $this->post(route('location.store'), [
            'name' => $name,
            'slug' => $slug,
            'user_id' => $user->id,
        ]);

        $locations = Location::query()
            ->where('name', $name)
            ->where('slug', $slug)
            ->where('user_id', $user->id)
            ->get();
        $this->assertCount(1, $locations);
        $location = $locations->first();

        $response->assertRedirect(route('location.index'));
        $response->assertSessionHas('location.id', $location->id);
    }


    /**
     * @test
     */
    public function show_displays_view()
    {
        $location = Location::factory()->create();

        $response = $this->get(route('location.show', $location));

        $response->assertOk();
        $response->assertViewIs('location.show');
        $response->assertViewHas('location');
    }


    /**
     * @test
     */
    public function edit_displays_view()
    {
        $location = Location::factory()->create();

        $response = $this->get(route('location.edit', $location));

        $response->assertOk();
        $response->assertViewIs('location.edit');
        $response->assertViewHas('location');
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\LocationController::class,
            'update',
            \App\Http\Requests\LocationUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_redirects()
    {
        $location = Location::factory()->create();
        $name = $this->faker->name;
        $slug = $this->faker->slug;
        $user = User::factory()->create();

        $response = $this->put(route('location.update', $location), [
            'name' => $name,
            'slug' => $slug,
            'user_id' => $user->id,
        ]);

        $location->refresh();

        $response->assertRedirect(route('location.index'));
        $response->assertSessionHas('location.id', $location->id);

        $this->assertEquals($name, $location->name);
        $this->assertEquals($slug, $location->slug);
        $this->assertEquals($user->id, $location->user_id);
    }


    /**
     * @test
     */
    public function destroy_deletes_and_redirects()
    {
        $location = Location::factory()->create();

        $response = $this->delete(route('location.destroy', $location));

        $response->assertRedirect(route('location.index'));

        $this->assertSoftDeleted($location);
    }
}
