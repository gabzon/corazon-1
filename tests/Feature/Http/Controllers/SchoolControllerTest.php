<?php

namespace Tests\Feature\Http\Controllers;

use App\School;
use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\SchoolController
 */
class SchoolControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $schools = School::factory()->count(3)->create();

        $response = $this->get(route('school.index'));

        $response->assertOk();
        $response->assertViewIs('school.index');
        $response->assertViewHas('schools');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('school.create'));

        $response->assertOk();
        $response->assertViewIs('school.create');
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\SchoolController::class,
            'store',
            \App\Http\Requests\SchoolStoreRequest::class
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

        $response = $this->post(route('school.store'), [
            'name' => $name,
            'slug' => $slug,
            'user_id' => $user->id,
        ]);

        $schools = School::query()
            ->where('name', $name)
            ->where('slug', $slug)
            ->where('user_id', $user->id)
            ->get();
        $this->assertCount(1, $schools);
        $school = $schools->first();

        $response->assertRedirect(route('school.index'));
        $response->assertSessionHas('school.id', $school->id);
    }


    /**
     * @test
     */
    public function show_displays_view()
    {
        $school = School::factory()->create();

        $response = $this->get(route('school.show', $school));

        $response->assertOk();
        $response->assertViewIs('school.show');
        $response->assertViewHas('school');
    }


    /**
     * @test
     */
    public function edit_displays_view()
    {
        $school = School::factory()->create();

        $response = $this->get(route('school.edit', $school));

        $response->assertOk();
        $response->assertViewIs('school.edit');
        $response->assertViewHas('school');
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\SchoolController::class,
            'update',
            \App\Http\Requests\SchoolUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_redirects()
    {
        $school = School::factory()->create();
        $name = $this->faker->name;
        $slug = $this->faker->slug;
        $user = User::factory()->create();

        $response = $this->put(route('school.update', $school), [
            'name' => $name,
            'slug' => $slug,
            'user_id' => $user->id,
        ]);

        $school->refresh();

        $response->assertRedirect(route('school.index'));
        $response->assertSessionHas('school.id', $school->id);

        $this->assertEquals($name, $school->name);
        $this->assertEquals($slug, $school->slug);
        $this->assertEquals($user->id, $school->user_id);
    }


    /**
     * @test
     */
    public function destroy_deletes_and_redirects()
    {
        $school = School::factory()->create();

        $response = $this->delete(route('school.destroy', $school));

        $response->assertRedirect(route('school.index'));

        $this->assertSoftDeleted($school);
    }
}
