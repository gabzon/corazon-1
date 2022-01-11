<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('cities', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50)->index();
            $table->string('slug', 80);

            $table->string('state', 100)->nullable();
            $table->string('region', 100)->nullable();
            $table->string('zip', 20)->nullable();
            
            $table->string('code', 20)->nullable();            
            $table->string('iataCode', 20)->nullable();
            $table->bigInteger('population')->nullable();
            
            $table->string('country', 100)->nullable();
            $table->string('alpha2Code', 20)->nullable();
            $table->string('alpha3Code', 20)->nullable();
            $table->string('world_region', 100)->nullable();
            
            $table->decimal('lat', 12, 9)->nullable();
            $table->decimal('lng', 12, 9)->nullable();
            
            $table->string('emblem')->nullable();
            $table->string('image')->nullable();

            $table->longText('description')->nullable();
            $table->foreignId('user_id')->constrained();
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
        Schema::dropIfExists('cities');
    }
}
