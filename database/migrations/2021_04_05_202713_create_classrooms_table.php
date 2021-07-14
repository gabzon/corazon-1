<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassroomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('classrooms', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('slug', 80);
            $table->decimal('m2')->nullable();
            $table->integer('capacity')->nullable();
            $table->integer('limit_couples')->nullable();
            $table->decimal('price_hour')->nullable();
            $table->decimal('price_month')->nullable();
            $table->boolean('dance_shoes')->nullable();
            $table->text('comments')->nullable();
            $table->string('color')->nullable();
            $table->foreignId('location_id')->nullable()->constrained();
            $table->foreignId('user_id')->constrained();
            $table->softDeletes();
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
        Schema::dropIfExists('classrooms');
    }
}
