<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->decimal('subtotal')->nullable();
            $table->decimal('vat')->nullable();
            $table->decimal('quantity_discount')->nullable();
            $table->decimal('user_status_discount')->nullable();
            $table->decimal('coupon_discount')->nullable();
            $table->string('coupon_code')->nullable();
            $table->decimal('total')->nullable();
            $table->text('comments')->nullable();
            $table->string('method')->nullable();
            $table->enum('status', ["open","canceled","paid","expired","partial"])->nullable();
            $table->foreignId('author_id')->nullable()->constrained('users');
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
