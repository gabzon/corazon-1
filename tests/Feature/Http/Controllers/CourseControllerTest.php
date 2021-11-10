<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\City;
use App\Models\Classroom;
use App\Models\Course;
use App\Models\School;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\CourseController
 */
class CourseControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    // public function index_displays_view()
    // {
    //     $courses = Course::factory()->count(3)->create();

    //     $response = $this->get(route('course.index'));

    //     $response->assertOk();
    //     $response->assertViewIs('course.index');
    //     $response->assertViewHas('courses');
    // }


    /**
     * @test
     */
    // public function create_displays_view()
    // {
    //     $response = $this->get(route('course.create'));

    //     $response->assertOk();
    //     $response->assertViewIs('course.create');
    // }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\CourseController::class,
            'store',
            \App\Http\Requests\CourseStoreRequest::class
        );
    }

    /**
     * @test
     */
    // public function store_saves_and_redirects()
    // {
    //     $name = $this->faker->name;
    //     $slug = $this->faker->slug;
    //     $user = User::factory()->create();
    //     $classroom = Classroom::factory()->create();
    //     $city = City::factory()->create();
    //     $school = School::factory()->create();

    //     $response = $this->post(route('course.store'), [
    //         'name' => $name,
    //         'slug' => $slug,
    //         'user_id' => $user->id,
    //         'classroom_id' => $classroom->id,
    //         'city_id' => $city->id,
    //         'school_id' => $school->id,
    //     ]);

    //     $courses = Course::query()
    //         ->where('name', $name)
    //         ->where('slug', $slug)
    //         ->where('user_id', $user->id)
    //         ->where('classroom_id', $classroom->id)
    //         ->where('city_id', $city->id)
    //         ->where('school_id', $school->id)
    //         ->get();
    //     $this->assertCount(1, $courses);
    //     $course = $courses->first();

    //     $response->assertRedirect(route('course.index'));
    //     $response->assertSessionHas('course.id', $course->id);
    // }


    /**
     * @test
     */
    // public function show_displays_view()
    // {
    //     $course = Course::factory()->create();

    //     $response = $this->get(route('course.show', $course));

    //     $response->assertOk();
    //     $response->assertViewIs('course.show');
    //     $response->assertViewHas('course');
    // }


    /**
     * @test
     */
    // public function edit_displays_view()
    // {
    //     $course = Course::factory()->create();

    //     $response = $this->get(route('course.edit', $course));

    //     $response->assertOk();
    //     $response->assertViewIs('course.edit');
    //     $response->assertViewHas('course');
    // }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\CourseController::class,
            'update',
            \App\Http\Requests\CourseUpdateRequest::class
        );
    }

    /**
     * @test
     */
    // public function update_redirects()
    // {
    //     $course = Course::factory()->create();
    //     $name = $this->faker->name;
    //     $slug = $this->faker->slug;
    //     $user = User::factory()->create();
    //     $classroom = Classroom::factory()->create();
    //     $city = City::factory()->create();
    //     $school = School::factory()->create();

    //     $response = $this->put(route('course.update', $course), [
    //         'name' => $name,
    //         'slug' => $slug,
    //         'user_id' => $user->id,
    //         'classroom_id' => $classroom->id,
    //         'city_id' => $city->id,
    //         'school_id' => $school->id,
    //     ]);

    //     $course->refresh();

    //     $response->assertRedirect(route('course.index'));
    //     $response->assertSessionHas('course.id', $course->id);

    //     $this->assertEquals($name, $course->name);
    //     $this->assertEquals($slug, $course->slug);
    //     $this->assertEquals($user->id, $course->user_id);
    //     $this->assertEquals($classroom->id, $course->classroom_id);
    //     $this->assertEquals($city->id, $course->city_id);
    //     $this->assertEquals($school->id, $course->school_id);
    // }


    /**
     * @test
     */
    // public function destroy_deletes_and_redirects()
    // {
    //     $course = Course::factory()->create();

    //     $response = $this->delete(route('course.destroy', $course));

    //     $response->assertRedirect(route('course.index'));

    //     $this->assertSoftDeleted($course);
    // }
}
