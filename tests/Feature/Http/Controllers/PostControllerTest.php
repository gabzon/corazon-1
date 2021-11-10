<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\PostController
 */
class PostControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    // public function index_displays_view()
    // {
    //     $posts = Post::factory()->count(3)->create();

    //     $response = $this->get(route('post.index'));

    //     $response->assertOk();
    //     $response->assertViewIs('post.index');
    //     $response->assertViewHas('posts');
    // }


    /**
     * @test
     */
    // public function create_displays_view()
    // {
    //     $response = $this->get(route('post.create'));

    //     $response->assertOk();
    //     $response->assertViewIs('post.create');
    // }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\PostController::class,
            'store',
            \App\Http\Requests\PostStoreRequest::class
        );
    }

    /**
     * @test
     */
    // public function store_saves_and_redirects()
    // {
    //     $title = $this->faker->sentence(4);
    //     $slug = $this->faker->slug;
    //     $user = User::factory()->create();

    //     $response = $this->post(route('post.store'), [
    //         'title' => $title,
    //         'slug' => $slug,
    //         'user_id' => $user->id,
    //     ]);

    //     $posts = Post::query()
    //         ->where('title', $title)
    //         ->where('slug', $slug)
    //         ->where('user_id', $user->id)
    //         ->get();
    //     $this->assertCount(1, $posts);
    //     $post = $posts->first();

    //     $response->assertRedirect(route('post.index'));
    //     $response->assertSessionHas('post.id', $post->id);
    // }


    /**
     * @test
     */
    // public function show_displays_view()
    // {
    //     $post = Post::factory()->create();

    //     $response = $this->get(route('post.show', $post));

    //     $response->assertOk();
    //     $response->assertViewIs('post.show');
    //     $response->assertViewHas('post');
    // }


    /**
     * @test
     */
    // public function edit_displays_view()
    // {
    //     $post = Post::factory()->create();

    //     $response = $this->get(route('post.edit', $post));

    //     $response->assertOk();
    //     $response->assertViewIs('post.edit');
    //     $response->assertViewHas('post');
    // }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\PostController::class,
            'update',
            \App\Http\Requests\PostUpdateRequest::class
        );
    }

    /**
     * @test
     */
    // public function update_redirects()
    // {
    //     $post = Post::factory()->create();
    //     $title = $this->faker->sentence(4);
    //     $slug = $this->faker->slug;
    //     $user = User::factory()->create();

    //     $response = $this->put(route('post.update', $post), [
    //         'title' => $title,
    //         'slug' => $slug,
    //         'user_id' => $user->id,
    //     ]);

    //     $post->refresh();

    //     $response->assertRedirect(route('post.index'));
    //     $response->assertSessionHas('post.id', $post->id);

    //     $this->assertEquals($title, $post->title);
    //     $this->assertEquals($slug, $post->slug);
    //     $this->assertEquals($user->id, $post->user_id);
    // }


    /**
     * @test
     */
    // public function destroy_deletes_and_redirects()
    // {
    //     $post = Post::factory()->create();

    //     $response = $this->delete(route('post.destroy', $post));

    //     $response->assertRedirect(route('post.index'));

    //     $this->assertSoftDeleted($post);
    // }
}
