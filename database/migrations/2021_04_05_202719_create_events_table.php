<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('slug', 120);
            $table->string('tagline')->nullable();
            $table->longText('description')->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->time('start_time')->nullable();
            $table->time('end_time')->nullable();
            $table->boolean('is_recurrent')->nullable();            
            $table->string('day')->nullable();

            $table->decimal('min_price')->nullable();
            $table->decimal('max_price')->nullable();
            $table->string('currency', 20)->nullable();
            $table->text('video')->nullable();
            $table->string('thumbnail')->nullable();
            $table->string('type')->nullable();
            $table->string('status')->nullable();
            $table->date('publish_at')->nullable();
            
            
            $table->string('organiser', 100)->nullable();
            $table->string('contact', 100)->nullable();
            $table->string('email', 100)->nullable();
            $table->string('phone', 100)->nullable();
            
            $table->string('website', 100)->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('instagram')->nullable();
            $table->string('youtube')->nullable();
            $table->string('tiktok')->nullable();        

            $table->string('facebook_id')->nullable();
            
            $table->foreignId('user_id')->constrained();
            $table->foreignId('location_id')->constrained();
            $table->foreignId('city_id')->constrained();
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
        Schema::dropIfExists('events');
    }
}
