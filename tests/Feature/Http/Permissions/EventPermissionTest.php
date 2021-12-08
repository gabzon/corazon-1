<?php

namespace Tests\Feature\Http\Permissions;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EventPermissionTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_user_cannot_view_events()
    {
        
        $user = User::factory()->create();
        
        /** @var \Illuminate\Contracts\Auth\Authenticatable $user */
        $response = $this->actingAs($user)->get('admin/event');

        $response->assertStatus(403);        
    }

    public function test_an_event_manager_can_view_events()
    {
        
        $user = User::factory()->create();
        $user->role = 'admin';
        
        /** @var \Illuminate\Contracts\Auth\Authenticatable $user */
        $response = $this->actingAs($user)->get('admin/event');

        $response->assertStatus(200);        
    }

}
