<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventPriceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_price', function (Blueprint $table) {
            $table->id();
            $table->decimal('amount');
            $table->string('label');
            $table->string('currency');
            $table->text('description')->nullable();

            $table->decimal('amount2')->nullable();
            $table->string('label2')->nullable();
            $table->dateTime('deadline2')->nullable();

            $table->decimal('amount3')->nullable();
            $table->string('label3')->nullable();
            $table->dateTime('deadline3')->nullable();

            $table->decimal('amount4')->nullable();
            $table->string('label4')->nullable();
            $table->dateTime('deadline4')->nullable();

            $table->decimal('amount5')->nullable();
            $table->string('label5')->nullable();
            $table->dateTime('deadline5')->nullable();
            $table->foreignId('event_id')->constrained()->onDelete('cascade');
            $table->foreignId('user_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prices');
    }
}
