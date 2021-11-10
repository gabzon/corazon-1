<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Classroom;
use App\Models\Location;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\ClassroomController
 */
class ClassroomControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    // public function index_displays_view()
    // {
    //     $classrooms = Classroom::factory()->count(3)->create();

    //     $response = $this->get(route('classroom.index'));

    //     $response->assertOk();
    //     $response->assertViewIs('classroom.index');
    //     $response->assertViewHas('classrooms');
    // }


    /**
     * @test
     */
    // public function create_displays_view()
    // {
    //     $response = $this->get(route('classroom.create'));

    //     $response->assertOk();
    //     $response->assertViewIs('classroom.create');
    // }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\ClassroomController::class,
            'store',
            \App\Http\Requests\ClassroomStoreRequest::class
        );
    }

    /**
     * @test
     */
    // public function store_saves_and_redirects()
    // {
    //     $name = $this->faker->name;
    //     $slug = $this->faker->slug;
    //     $location = Location::factory()->create();
    //     $user = User::factory()->create();

    //     $response = $this->post(route('classroom.store'), [
    //         'name' => $name,
    //         'slug' => $slug,
    //         'location_id' => $location->id,
    //         'user_id' => $user->id,
    //     ]);

    //     $classrooms = Classroom::query()
    //         ->where('name', $name)
    //         ->where('slug', $slug)
    //         ->where('location_id', $location->id)
    //         ->where('user_id', $user->id)
    //         ->get();
    //     $this->assertCount(1, $classrooms);
    //     $classroom = $classrooms->first();

    //     $response->assertRedirect(route('classroom.index'));
    //     $response->assertSessionHas('classroom.id', $classroom->id);
    // }


    /**
     * @test
     */
    // public function show_displays_view()
    // {
    //     $classroom = Classroom::factory()->create();

    //     $response = $this->get(route('classroom.show', $classroom));

    //     $response->assertOk();
    //     $response->assertViewIs('classroom.show');
    //     $response->assertViewHas('classroom');
    // }


    /**
     * @test
     */
    // public function edit_displays_view()
    // {
    //     $classroom = Classroom::factory()->create();

    //     $response = $this->get(route('classroom.edit', $classroom));

    //     $response->assertOk();
    //     $response->assertViewIs('classroom.edit');
    //     $response->assertViewHas('classroom');
    // }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\ClassroomController::class,
            'update',
            \App\Http\Requests\ClassroomUpdateRequest::class
        );
    }

    /**
     * @test
     */
    // public function update_redirects()
    // {
    //     $classroom = Classroom::factory()->create();
    //     $name = $this->faker->name;
    //     $slug = $this->faker->slug;
    //     $location = Location::factory()->create();
    //     $user = User::factory()->create();

    //     $response = $this->put(route('classroom.update', $classroom), [
    //         'name' => $name,
    //         'slug' => $slug,
    //         'location_id' => $location->id,
    //         'user_id' => $user->id,
    //     ]);

    //     $classroom->refresh();

    //     $response->assertRedirect(route('classroom.index'));
    //     $response->assertSessionHas('classroom.id', $classroom->id);

    //     $this->assertEquals($name, $classroom->name);
    //     $this->assertEquals($slug, $classroom->slug);
    //     $this->assertEquals($location->id, $classroom->location_id);
    //     $this->assertEquals($user->id, $classroom->user_id);
    // }


    /**
     * @test
     */
    // public function destroy_deletes_and_redirects()
    // {
    //     $classroom = Classroom::factory()->create();

    //     $response = $this->delete(route('classroom.destroy', $classroom));

    //     $response->assertRedirect(route('classroom.index'));

    //     $this->assertSoftDeleted($classroom);
    // }
}
