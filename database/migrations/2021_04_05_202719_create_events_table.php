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
            $table->datetime('start_date')->nullable();
            $table->datetime('end_date')->nullable();                        
            $table->boolean('is_recurrent')->default(false)->nullable();
            $table->string('recurrent_days')->nullable();
            $table->boolean('is_online')->default(false)->nullable();
            $table->string('default_registration_status')->nullable()->default('pre-registered');
            $table->integer('limit_attendees')->nullable();

            $table->boolean('is_free')->nullable();
            $table->text('video')->nullable();
            $table->string('thumbnail')->nullable();
            $table->string('type')->nullable();
            $table->string('status')->nullable();
            $table->string('public')->nullable();
            $table->date('publish_at')->nullable();
            
            $table->string('organiser', 100)->nullable();
            $table->string('contact', 100)->nullable();
            $table->string('email', 100)->nullable();
            $table->string('phone', 100)->nullable();
            
            $table->string('website')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('instagram')->nullable();
            $table->string('youtube')->nullable();
            $table->string('tiktok')->nullable();        

            
            $table->string('facebook_id')->nullable();
            $table->boolean('is_private')->default(false);
            $table->string('registration_url')->nullable();
            $table->string('private_group_url')->nullable();
            
            $table->foreignId('user_id')->constrained();
            $table->foreignId('location_id')->nullable()->constrained();
            $table->foreignId('city_id')->nullable()->constrained();
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
