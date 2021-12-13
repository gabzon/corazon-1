<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->string('name', 200);
            $table->string('slug', 300);
            $table->string('shortname', 30)->nullable();
            $table->text('comments')->nullable();
            $table->string('contact')->nullable();
            $table->string('logo')->nullable();
            $table->string('facade')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('website')->nullable();
            $table->string('facebook')->nullable();            
            $table->string('twitter')->nullable();
            $table->string('instagram')->nullable();
            $table->string('youtube')->nullable();
            $table->string('tiktok')->nullable();
            $table->boolean('has_sink')->nullable();
            $table->boolean('has_bar')->nullable();
            $table->boolean('has_fridge')->nullable();
            $table->boolean('has_hall')->nullable();
            $table->boolean('has_changeroom')->nullable();
            $table->boolean('has_lockers')->nullable();
            $table->boolean('has_wc')->nullable();
            $table->boolean('has_separate_wc')->nullable();
            $table->boolean('has_shower')->nullable();
            $table->boolean('has_parking')->nullable();
            $table->boolean('has_parking_bike')->nullable();
            $table->string('parking')->nullable();            
            $table->string('type')->nullable();
            $table->text('contract')->nullable();
            $table->text('video')->nullable();
            $table->string('address')->nullable();
            $table->string('address_info')->nullable();
            $table->string('zip')->nullable();            
            $table->string('neighborhood')->nullable();                                    
            $table->string('entry_code')->nullable();
            $table->string('facebook_id')->nullable();            
            $table->string('google_id')->nullable();
            $table->decimal('lng', 12, 9)->nullable();
            $table->decimal('lat', 12, 9)->nullable();
            $table->string('google_maps_shortlink')->nullable();
            $table->text('google_maps')->nullable();
            $table->string('public_transportation')->nullable();
            $table->foreignId('user_id')->constrained();
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
        Schema::dropIfExists('locations');
    }
}
