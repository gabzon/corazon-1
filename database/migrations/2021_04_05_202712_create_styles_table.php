<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStylesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('styles', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('slug', 80)->nullable();
            $table->string('icon', 40)->nullable();
            $table->string('color', 40)->nullable();
            $table->string('thumbnail')->nullable();
            $table->string('origin', 50)->nullable();
            $table->string('family', 100)->nullable();
            $table->string('music')->nullable();
            $table->string('year', 20)->nullable();
            $table->string('video')->nullable();
            $table->text('description')->nullable();
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
        Schema::dropIfExists('styles');
    }
}
