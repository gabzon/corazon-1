<?php

namespace Tests\Feature\Http\Controllers;

use App\Skill;
use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\SkillController
 */
class SkillControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $skills = Skill::factory()->count(3)->create();

        $response = $this->get(route('skill.index'));

        $response->assertOk();
        $response->assertViewIs('skill.index');
        $response->assertViewHas('skills');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('skill.create'));

        $response->assertOk();
        $response->assertViewIs('skill.create');
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\SkillController::class,
            'store',
            \App\Http\Requests\SkillStoreRequest::class
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

        $response = $this->post(route('skill.store'), [
            'name' => $name,
            'slug' => $slug,
            'user_id' => $user->id,
        ]);

        $skills = Skill::query()
            ->where('name', $name)
            ->where('slug', $slug)
            ->where('user_id', $user->id)
            ->get();
        $this->assertCount(1, $skills);
        $skill = $skills->first();

        $response->assertRedirect(route('skill.index'));
        $response->assertSessionHas('skill.id', $skill->id);
    }


    /**
     * @test
     */
    public function show_displays_view()
    {
        $skill = Skill::factory()->create();

        $response = $this->get(route('skill.show', $skill));

        $response->assertOk();
        $response->assertViewIs('skill.show');
        $response->assertViewHas('skill');
    }


    /**
     * @test
     */
    public function edit_displays_view()
    {
        $skill = Skill::factory()->create();

        $response = $this->get(route('skill.edit', $skill));

        $response->assertOk();
        $response->assertViewIs('skill.edit');
        $response->assertViewHas('skill');
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\SkillController::class,
            'update',
            \App\Http\Requests\SkillUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_redirects()
    {
        $skill = Skill::factory()->create();
        $name = $this->faker->name;
        $slug = $this->faker->slug;
        $user = User::factory()->create();

        $response = $this->put(route('skill.update', $skill), [
            'name' => $name,
            'slug' => $slug,
            'user_id' => $user->id,
        ]);

        $skill->refresh();

        $response->assertRedirect(route('skill.index'));
        $response->assertSessionHas('skill.id', $skill->id);

        $this->assertEquals($name, $skill->name);
        $this->assertEquals($slug, $skill->slug);
        $this->assertEquals($user->id, $skill->user_id);
    }


    /**
     * @test
     */
    public function destroy_deletes_and_redirects()
    {
        $skill = Skill::factory()->create();

        $response = $this->delete(route('skill.destroy', $skill));

        $response->assertRedirect(route('skill.index'));

        $this->assertSoftDeleted($skill);
    }
}
