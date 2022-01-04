<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursePricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_prices', function (Blueprint $table) {
            $table->id();
            $table->string('currency');
            $table->string('label');
            $table->text('description')->nullable();
            $table->decimal('full_price');
            $table->decimal('student_price')->nullable();
            $table->decimal('retired_price')->nullable();
            $table->decimal('unemployed_price')->nullable();
            $table->decimal('promo_price')->nullable();
            $table->decimal('partner_price')->nullable();
            $table->dateTime('deadline')->nullable();
            $table->integer('days')->nullable();
            $table->foreignId('organization_id')->constrained()->onDelete('cascade');
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
        Schema::dropIfExists('course_prices');
    }
}
