<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Style;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\StyleController
 */
class StyleControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    // public function index_displays_view()
    // {
    //     $styles = Style::factory()->count(3)->create();

    //     $response = $this->get(route('style.index'));

    //     $response->assertOk();
    //     $response->assertViewIs('style.index');
    //     $response->assertViewHas('styles');
    // }


    /**
     * @test
     */
    // public function create_displays_view()
    // {
    //     $response = $this->get(route('style.create'));

    //     $response->assertOk();
    //     $response->assertViewIs('style.create');
    // }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\StyleController::class,
            'store',
            \App\Http\Requests\StyleStoreRequest::class
        );
    }

    /**
     * @test
     */
    // public function store_saves_and_redirects()
    // {
    //     $name = $this->faker->name;
    //     $user = User::factory()->create();

    //     $response = $this->post(route('style.store'), [
    //         'name' => $name,
    //         'user_id' => $user->id,
    //     ]);

    //     $styles = Style::query()
    //         ->where('name', $name)
    //         ->where('user_id', $user->id)
    //         ->get();
    //     $this->assertCount(1, $styles);
    //     $style = $styles->first();

    //     $response->assertRedirect(route('style.index'));
    //     $response->assertSessionHas('style.id', $style->id);
    // }


    /**
     * @test
     */
    // public function show_displays_view()
    // {
    //     $style = Style::factory()->create();

    //     $response = $this->get(route('style.show', $style));

    //     $response->assertOk();
    //     $response->assertViewIs('style.show');
    //     $response->assertViewHas('style');
    // }


    /**
     * @test
     */
    // public function edit_displays_view()
    // {
    //     $style = Style::factory()->create();

    //     $response = $this->get(route('style.edit', $style));

    //     $response->assertOk();
    //     $response->assertViewIs('style.edit');
    //     $response->assertViewHas('style');
    // }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\StyleController::class,
            'update',
            \App\Http\Requests\StyleUpdateRequest::class
        );
    }

    /**
     * @test
     */
    // public function update_redirects()
    // {
    //     $style = Style::factory()->create();
    //     $name = $this->faker->name;
    //     $user = User::factory()->create();

    //     $response = $this->put(route('style.update', $style), [
    //         'name' => $name,
    //         'user_id' => $user->id,
    //     ]);

    //     $style->refresh();

    //     $response->assertRedirect(route('style.index'));
    //     $response->assertSessionHas('style.id', $style->id);

    //     $this->assertEquals($name, $style->name);
    //     $this->assertEquals($user->id, $style->user_id);
    // }


    /**
     * @test
     */
    // public function destroy_deletes_and_redirects()
    // {
    //     $style = Style::factory()->create();

    //     $response = $this->delete(route('style.destroy', $style));

    //     $response->assertRedirect(route('style.index'));

    //     $this->assertSoftDeleted($style);
    // }
}
