<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Lesson;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\LessonController
 */
class LessonControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    // public function index_displays_view()
    // {
    //     $lessons = Lesson::factory()->count(3)->create();

    //     $response = $this->get(route('lesson.index'));

    //     $response->assertOk();
    //     $response->assertViewIs('lesson.index');
    //     $response->assertViewHas('lessons');
    // }


    /**
     * @test
     */
    // public function create_displays_view()
    // {
    //     $response = $this->get(route('lesson.create'));

    //     $response->assertOk();
    //     $response->assertViewIs('lesson.create');
    // }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\LessonController::class,
            'store',
            \App\Http\Requests\LessonStoreRequest::class
        );
    }

    /**
     * @test
     */
    // public function store_saves_and_redirects()
    // {
    //     $user = User::factory()->create();

    //     $response = $this->post(route('lesson.store'), [
    //         'user_id' => $user->id,
    //     ]);

    //     $lessons = Lesson::query()
    //         ->where('user_id', $user->id)
    //         ->get();
    //     $this->assertCount(1, $lessons);
    //     $lesson = $lessons->first();

    //     $response->assertRedirect(route('lesson.index'));
    //     $response->assertSessionHas('lesson.id', $lesson->id);
    // }


    /**
     * @test
     */
    // public function show_displays_view()
    // {
    //     $lesson = Lesson::factory()->create();

    //     $response = $this->get(route('lesson.show', $lesson));

    //     $response->assertOk();
    //     $response->assertViewIs('lesson.show');
    //     $response->assertViewHas('lesson');
    // }


    /**
     * @test
     */
    // public function edit_displays_view()
    // {
    //     $lesson = Lesson::factory()->create();

    //     $response = $this->get(route('lesson.edit', $lesson));

    //     $response->assertOk();
    //     $response->assertViewIs('lesson.edit');
    //     $response->assertViewHas('lesson');
    // }


    /**
     * @test
     */
    // public function update_uses_form_request_validation()
    // {
    //     $this->assertActionUsesFormRequest(
    //         \App\Http\Controllers\LessonController::class,
    //         'update',
    //         \App\Http\Requests\LessonUpdateRequest::class
    //     );
    // }

    /**
     * @test
     */
    // public function update_redirects()
    // {
    //     $lesson = Lesson::factory()->create();
    //     $user = User::factory()->create();

    //     $response = $this->put(route('lesson.update', $lesson), [
    //         'user_id' => $user->id,
    //     ]);

    //     $lesson->refresh();

    //     $response->assertRedirect(route('lesson.index'));
    //     $response->assertSessionHas('lesson.id', $lesson->id);

    //     $this->assertEquals($user->id, $lesson->user_id);
    // }


    /**
     * @test
     */
    // public function destroy_deletes_and_redirects()
    // {
    //     $lesson = Lesson::factory()->create();

    //     $response = $this->delete(route('lesson.destroy', $lesson));

    //     $response->assertRedirect(route('lesson.index'));

    //     $this->assertSoftDeleted($lesson);
    // }
}
