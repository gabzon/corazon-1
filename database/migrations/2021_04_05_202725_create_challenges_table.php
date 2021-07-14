<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChallengesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('challenges', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->longText('description')->nullable();
            $table->text('video')->nullable();
            $table->string('thumbnail')->nullable();
            $table->foreignId('user_id')->constrained();
            $table->enum('difficulty', ["easy","moderate","difficult"])->nullable();
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
        Schema::dropIfExists('challenges');
    }
}
