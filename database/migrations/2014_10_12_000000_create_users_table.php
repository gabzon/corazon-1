<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->index();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            
            $table->string('password')->nullable();
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->text('profile_photo_path')->nullable();
            
            $table->string('facebook_id')->nullable();
            $table->text('facebook_token')->nullable();
            $table->string('instagram_id')->nullable();
            $table->string('google_id')->nullable();
            $table->string('idn')->nullable();
            
            $table->string('username')->nullable()->unique();
            $table->date('birthday')->nullable();
            $table->text('avatar')->nullable();            
            $table->enum('gender',['male','female'])->nullable();            
            $table->string('profession')->nullable();
            $table->string('nationality')->nullable();
            $table->text('biography')->nullable();
                        
            $table->string('work_status')->default('working');
            $table->string('unemployement_proof')->nullable();
            $table->date('unemployement_expiry_date')->nullable();
            $table->boolean('work_status_verified')->nullable();
            $table->string('mobile')->nullable();            
            $table->string('phone')->nullable();            
            $table->timestamp('mobile_verified_at')->nullable();     //asdlkfjalsdfkja      
            $table->timestamp('phone_verified_at')->nullable();              
                             
            $table->string('address')->nullable();
            $table->string('address_info')->nullable();
            $table->string('zip')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('country')->nullable();
            $table->decimal('lat', 10, 8)->nullable();
            $table->decimal('lng', 11, 8)->nullable();

            $table->string('facebook')->nullable()->unique();            
            $table->string('instagram')->nullable()->unique();
            $table->string('youtube')->nullable()->unique();
            $table->string('tiktok')->nullable()->unique();
            $table->string('twitter')->nullable()->unique(); 

            $table->string('role')->default('user');
            $table->boolean('is_super')->default(false);

            $table->timestamp('last_login_at')->nullable();
            $table->string('last_login_ip')->nullable();

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
        Schema::dropIfExists('users');
    }
}
