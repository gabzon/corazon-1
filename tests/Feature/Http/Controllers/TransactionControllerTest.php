<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Order;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\TransactionController
 */
class TransactionControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    // public function index_displays_view()
    // {
    //     $transactions = Transaction::factory()->count(3)->create();

    //     $response = $this->get(route('transaction.index'));

    //     $response->assertOk();
    //     $response->assertViewIs('transaction.index');
    //     $response->assertViewHas('transactions');
    // }


    /**
     * @test
     */
    // public function create_displays_view()
    // {
    //     $response = $this->get(route('transaction.create'));

    //     $response->assertOk();
    //     $response->assertViewIs('transaction.create');
    // }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\TransactionController::class,
            'store',
            \App\Http\Requests\TransactionStoreRequest::class
        );
    }

    /**
     * @test
     */
    // public function store_saves_and_redirects()
    // {
    //     $amount = $this->faker->word;
    //     $status = $this->faker->randomElement(/** enum_attributes **/);
    //     $user = User::factory()->create();
    //     $order = Order::factory()->create();

    //     $response = $this->post(route('transaction.store'), [
    //         'amount' => $amount,
    //         'status' => $status,
    //         'user_id' => $user->id,
    //         'order_id' => $order->id,
    //     ]);

    //     $transactions = Transaction::query()
    //         ->where('amount', $amount)
    //         ->where('status', $status)
    //         ->where('user_id', $user->id)
    //         ->where('order_id', $order->id)
    //         ->get();
    //     $this->assertCount(1, $transactions);
    //     $transaction = $transactions->first();

    //     $response->assertRedirect(route('transaction.index'));
    //     $response->assertSessionHas('transaction.id', $transaction->id);
    // }


    /**
     * @test
     */
    // public function show_displays_view()
    // {
    //     $transaction = Transaction::factory()->create();

    //     $response = $this->get(route('transaction.show', $transaction));

    //     $response->assertOk();
    //     $response->assertViewIs('transaction.show');
    //     $response->assertViewHas('transaction');
    // }


    /**
     * @test
     */
    // public function edit_displays_view()
    // {
    //     $transaction = Transaction::factory()->create();

    //     $response = $this->get(route('transaction.edit', $transaction));

    //     $response->assertOk();
    //     $response->assertViewIs('transaction.edit');
    //     $response->assertViewHas('transaction');
    // }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\TransactionController::class,
            'update',
            \App\Http\Requests\TransactionUpdateRequest::class
        );
    }

    /**
     * @test
     */
    // public function update_redirects()
    // {
    //     $transaction = Transaction::factory()->create();
    //     $amount = $this->faker->word;
    //     $status = $this->faker->randomElement(/** enum_attributes **/);
    //     $user = User::factory()->create();
    //     $order = Order::factory()->create();

    //     $response = $this->put(route('transaction.update', $transaction), [
    //         'amount' => $amount,
    //         'status' => $status,
    //         'user_id' => $user->id,
    //         'order_id' => $order->id,
    //     ]);

    //     $transaction->refresh();

    //     $response->assertRedirect(route('transaction.index'));
    //     $response->assertSessionHas('transaction.id', $transaction->id);

    //     $this->assertEquals($amount, $transaction->amount);
    //     $this->assertEquals($status, $transaction->status);
    //     $this->assertEquals($user->id, $transaction->user_id);
    //     $this->assertEquals($order->id, $transaction->order_id);
    // }


    /**
     * @test
     */
    // public function destroy_deletes_and_redirects()
    // {
    //     $transaction = Transaction::factory()->create();

    //     $response = $this->delete(route('transaction.destroy', $transaction));

    //     $response->assertRedirect(route('transaction.index'));

    //     $this->assertSoftDeleted($transaction);
    // }
}
