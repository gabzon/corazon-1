<?php

namespace Tests\Feature\Http\Controllers;

use App\Challenge;
use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\ChallengeController
 */
class ChallengeControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $challenges = Challenge::factory()->count(3)->create();

        $response = $this->get(route('challenge.index'));

        $response->assertOk();
        $response->assertViewIs('challenge.index');
        $response->assertViewHas('challenges');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('challenge.create'));

        $response->assertOk();
        $response->assertViewIs('challenge.create');
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\ChallengeController::class,
            'store',
            \App\Http\Requests\ChallengeStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $name = $this->faker->name;
        $user = User::factory()->create();

        $response = $this->post(route('challenge.store'), [
            'name' => $name,
            'user_id' => $user->id,
        ]);

        $challenges = Challenge::query()
            ->where('name', $name)
            ->where('user_id', $user->id)
            ->get();
        $this->assertCount(1, $challenges);
        $challenge = $challenges->first();

        $response->assertRedirect(route('challenge.index'));
        $response->assertSessionHas('challenge.id', $challenge->id);
    }


    /**
     * @test
     */
    public function show_displays_view()
    {
        $challenge = Challenge::factory()->create();

        $response = $this->get(route('challenge.show', $challenge));

        $response->assertOk();
        $response->assertViewIs('challenge.show');
        $response->assertViewHas('challenge');
    }


    /**
     * @test
     */
    public function edit_displays_view()
    {
        $challenge = Challenge::factory()->create();

        $response = $this->get(route('challenge.edit', $challenge));

        $response->assertOk();
        $response->assertViewIs('challenge.edit');
        $response->assertViewHas('challenge');
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\ChallengeController::class,
            'update',
            \App\Http\Requests\ChallengeUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_redirects()
    {
        $challenge = Challenge::factory()->create();
        $name = $this->faker->name;
        $user = User::factory()->create();

        $response = $this->put(route('challenge.update', $challenge), [
            'name' => $name,
            'user_id' => $user->id,
        ]);

        $challenge->refresh();

        $response->assertRedirect(route('challenge.index'));
        $response->assertSessionHas('challenge.id', $challenge->id);

        $this->assertEquals($name, $challenge->name);
        $this->assertEquals($user->id, $challenge->user_id);
    }


    /**
     * @test
     */
    public function destroy_deletes_and_redirects()
    {
        $challenge = Challenge::factory()->create();

        $response = $this->delete(route('challenge.destroy', $challenge));

        $response->assertRedirect(route('challenge.index'));

        $this->assertDeleted($challenge);
    }
}
