<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\ProductController
 */
class ProductControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    // public function index_displays_view()
    // {
    //     $products = Product::factory()->count(3)->create();

    //     $response = $this->get(route('product.index'));

    //     $response->assertOk();
    //     $response->assertViewIs('product.index');
    //     $response->assertViewHas('products');
    // }


    /**
     * @test
     */
    // public function create_displays_view()
    // {
    //     $response = $this->get(route('product.create'));

    //     $response->assertOk();
    //     $response->assertViewIs('product.create');
    // }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\ProductController::class,
            'store',
            \App\Http\Requests\ProductStoreRequest::class
        );
    }

    /**
     * @test
     */
    // public function store_saves_and_redirects()
    // {
    //     $name = $this->faker->name;
    //     $price = $this->faker->randomFloat(/** decimal_attributes **/);

    //     $response = $this->post(route('product.store'), [
    //         'name' => $name,
    //         'price' => $price,
    //     ]);

    //     $products = Product::query()
    //         ->where('name', $name)
    //         ->where('price', $price)
    //         ->get();
    //     $this->assertCount(1, $products);
    //     $product = $products->first();

    //     $response->assertRedirect(route('product.index'));
    //     $response->assertSessionHas('product.id', $product->id);
    // }


    /**
     * @test
     */
    // public function show_displays_view()
    // {
    //     $product = Product::factory()->create();

    //     $response = $this->get(route('product.show', $product));

    //     $response->assertOk();
    //     $response->assertViewIs('product.show');
    //     $response->assertViewHas('product');
    // }


    /**
     * @test
     */
    // public function edit_displays_view()
    // {
    //     $product = Product::factory()->create();

    //     $response = $this->get(route('product.edit', $product));

    //     $response->assertOk();
    //     $response->assertViewIs('product.edit');
    //     $response->assertViewHas('product');
    // }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\ProductController::class,
            'update',
            \App\Http\Requests\ProductUpdateRequest::class
        );
    }

    /**
     * @test
     */
    // public function update_redirects()
    // {
    //     $product = Product::factory()->create();
    //     $name = $this->faker->name;
    //     $price = $this->faker->randomFloat(/** decimal_attributes **/);

    //     $response = $this->put(route('product.update', $product), [
    //         'name' => $name,
    //         'price' => $price,
    //     ]);

    //     $product->refresh();

    //     $response->assertRedirect(route('product.index'));
    //     $response->assertSessionHas('product.id', $product->id);

    //     $this->assertEquals($name, $product->name);
    //     $this->assertEquals($price, $product->price);
    // }


    /**
     * @test
     */
    // public function destroy_deletes_and_redirects()
    // {
    //     $product = Product::factory()->create();

    //     $response = $this->delete(route('product.destroy', $product));

    //     $response->assertRedirect(route('product.index'));

    //     $this->assertDeleted($product);
    // }
}
