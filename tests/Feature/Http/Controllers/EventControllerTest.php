<?php

namespace Tests\Feature\Http\Controllers;

use App\City;
use App\Classroom;
use App\Event;
use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\EventController
 */
class EventControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $events = Event::factory()->count(3)->create();

        $response = $this->get(route('event.index'));

        $response->assertOk();
        $response->assertViewIs('event.index');
        $response->assertViewHas('events');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('event.create'));

        $response->assertOk();
        $response->assertViewIs('event.create');
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\EventController::class,
            'store',
            \App\Http\Requests\EventStoreRequest::class
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
        $classroom = Classroom::factory()->create();
        $city = City::factory()->create();

        $response = $this->post(route('event.store'), [
            'name' => $name,
            'slug' => $slug,
            'user_id' => $user->id,
            'classroom_id' => $classroom->id,
            'city_id' => $city->id,
        ]);

        $events = Event::query()
            ->where('name', $name)
            ->where('slug', $slug)
            ->where('user_id', $user->id)
            ->where('classroom_id', $classroom->id)
            ->where('city_id', $city->id)
            ->get();
        $this->assertCount(1, $events);
        $event = $events->first();

        $response->assertRedirect(route('event.index'));
        $response->assertSessionHas('event.id', $event->id);
    }


    /**
     * @test
     */
    public function show_displays_view()
    {
        $event = Event::factory()->create();

        $response = $this->get(route('event.show', $event));

        $response->assertOk();
        $response->assertViewIs('event.show');
        $response->assertViewHas('event');
    }


    /**
     * @test
     */
    public function edit_displays_view()
    {
        $event = Event::factory()->create();

        $response = $this->get(route('event.edit', $event));

        $response->assertOk();
        $response->assertViewIs('event.edit');
        $response->assertViewHas('event');
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\EventController::class,
            'update',
            \App\Http\Requests\EventUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_redirects()
    {
        $event = Event::factory()->create();
        $name = $this->faker->name;
        $slug = $this->faker->slug;
        $user = User::factory()->create();
        $classroom = Classroom::factory()->create();
        $city = City::factory()->create();

        $response = $this->put(route('event.update', $event), [
            'name' => $name,
            'slug' => $slug,
            'user_id' => $user->id,
            'classroom_id' => $classroom->id,
            'city_id' => $city->id,
        ]);

        $event->refresh();

        $response->assertRedirect(route('event.index'));
        $response->assertSessionHas('event.id', $event->id);

        $this->assertEquals($name, $event->name);
        $this->assertEquals($slug, $event->slug);
        $this->assertEquals($user->id, $event->user_id);
        $this->assertEquals($classroom->id, $event->classroom_id);
        $this->assertEquals($city->id, $event->city_id);
    }


    /**
     * @test
     */
    public function destroy_deletes_and_redirects()
    {
        $event = Event::factory()->create();

        $response = $this->delete(route('event.destroy', $event));

        $response->assertRedirect(route('event.index'));

        $this->assertSoftDeleted($event);
    }
}
