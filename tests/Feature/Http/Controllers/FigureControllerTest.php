<?php

namespace Tests\Feature\Http\Controllers;

use App\Figure;
use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\FigureController
 */
class FigureControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $figures = Figure::factory()->count(3)->create();

        $response = $this->get(route('figure.index'));

        $response->assertOk();
        $response->assertViewIs('figure.index');
        $response->assertViewHas('figures');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('figure.create'));

        $response->assertOk();
        $response->assertViewIs('figure.create');
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\FigureController::class,
            'store',
            \App\Http\Requests\FigureStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $name = $this->faker->name;
        $user = User::factory()->create();

        $response = $this->post(route('figure.store'), [
            'name' => $name,
            'user_id' => $user->id,
        ]);

        $figures = Figure::query()
            ->where('name', $name)
            ->where('user_id', $user->id)
            ->get();
        $this->assertCount(1, $figures);
        $figure = $figures->first();

        $response->assertRedirect(route('figure.index'));
        $response->assertSessionHas('figure.id', $figure->id);
    }


    /**
     * @test
     */
    public function show_displays_view()
    {
        $figure = Figure::factory()->create();

        $response = $this->get(route('figure.show', $figure));

        $response->assertOk();
        $response->assertViewIs('figure.show');
        $response->assertViewHas('figure');
    }


    /**
     * @test
     */
    public function edit_displays_view()
    {
        $figure = Figure::factory()->create();

        $response = $this->get(route('figure.edit', $figure));

        $response->assertOk();
        $response->assertViewIs('figure.edit');
        $response->assertViewHas('figure');
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\FigureController::class,
            'update',
            \App\Http\Requests\FigureUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_redirects()
    {
        $figure = Figure::factory()->create();
        $name = $this->faker->name;
        $user = User::factory()->create();

        $response = $this->put(route('figure.update', $figure), [
            'name' => $name,
            'user_id' => $user->id,
        ]);

        $figure->refresh();

        $response->assertRedirect(route('figure.index'));
        $response->assertSessionHas('figure.id', $figure->id);

        $this->assertEquals($name, $figure->name);
        $this->assertEquals($user->id, $figure->user_id);
    }


    /**
     * @test
     */
    public function destroy_deletes_and_redirects()
    {
        $figure = Figure::factory()->create();

        $response = $this->delete(route('figure.destroy', $figure));

        $response->assertRedirect(route('figure.index'));

        $this->assertDeleted($figure);
    }
}
