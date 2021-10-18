<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrganizationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organizations', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('slug', 120);
            $table->string('shortname', 30)->nullable();
            $table->text('video')->nullable();
            $table->string('logo')->nullable();
            $table->text('about')->nullable();
            $table->string('contact', 100)->nullable();
            $table->string('email', 100)->nullable();
            $table->string('phone', 100)->nullable();
            $table->string('website', 100)->nullable();
            $table->string('oid')->nullable();
            $table->string('facebook_id')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('instagram')->nullable();
            $table->string('youtube')->nullable();
            $table->string('tiktok')->nullable();
            $table->string('status')->nullable();
            $table->string('type')->default('school')->nullable();
            $table->string('address')->nullable();
            $table->string('address_info')->nullable();
            $table->string('zip')->nullable();                                
            $table->decimal('lat', 10, 8)->nullable();
            $table->decimal('lng', 11, 8)->nullable();
            $table->integer('founded')->nullable();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('city_id')->constrained();
            $table->softDeletes();            
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
        Schema::dropIfExists('organizations');
    }
}
