<?php

namespace Tests\Feature\Http\Controllers;

use App\Setting;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\SettingController
 */
class SettingControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $settings = Setting::factory()->count(3)->create();

        $response = $this->get(route('setting.index'));

        $response->assertOk();
        $response->assertViewIs('setting.index');
        $response->assertViewHas('settings');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('setting.create'));

        $response->assertOk();
        $response->assertViewIs('setting.create');
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\SettingController::class,
            'store',
            \App\Http\Requests\SettingStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $response = $this->post(route('setting.store'));

        $response->assertRedirect(route('setting.index'));
        $response->assertSessionHas('setting.id', $setting->id);

        $this->assertDatabaseHas(settings, [ /* ... */ ]);
    }


    /**
     * @test
     */
    public function show_displays_view()
    {
        $setting = Setting::factory()->create();

        $response = $this->get(route('setting.show', $setting));

        $response->assertOk();
        $response->assertViewIs('setting.show');
        $response->assertViewHas('setting');
    }


    /**
     * @test
     */
    public function edit_displays_view()
    {
        $setting = Setting::factory()->create();

        $response = $this->get(route('setting.edit', $setting));

        $response->assertOk();
        $response->assertViewIs('setting.edit');
        $response->assertViewHas('setting');
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\SettingController::class,
            'update',
            \App\Http\Requests\SettingUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_redirects()
    {
        $setting = Setting::factory()->create();

        $response = $this->put(route('setting.update', $setting));

        $setting->refresh();

        $response->assertRedirect(route('setting.index'));
        $response->assertSessionHas('setting.id', $setting->id);
    }


    /**
     * @test
     */
    public function destroy_deletes_and_redirects()
    {
        $setting = Setting::factory()->create();

        $response = $this->delete(route('setting.destroy', $setting));

        $response->assertRedirect(route('setting.index'));

        $this->assertDeleted($setting);
    }
}
