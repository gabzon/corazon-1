<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('name', 200);
            $table->string('slug', 300);

            $table->text('excerpt')->nullable();
            $table->longText('description')->nullable();
            $table->string('tagline')->nullable();
            $table->string('keywords')->nullable();
            
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->boolean('monday')->nullable();
            $table->time('start_time_mon')->nullable();
            $table->time('end_time_mon')->nullable();
            $table->boolean('tuesday')->nullable();
            $table->time('start_time_tue')->nullable();
            $table->time('end_time_tue')->nullable();
            $table->boolean('wednesday')->nullable();
            $table->time('start_time_wed')->nullable();
            $table->time('end_time_wed')->nullable();
            $table->boolean('thursday')->nullable();
            $table->time('start_time_thu')->nullable();
            $table->time('end_time_thu')->nullable();
            $table->boolean('friday')->nullable();
            $table->time('start_time_fri')->nullable();
            $table->time('end_time_fri')->nullable();
            $table->boolean('saturday')->nullable();
            $table->time('start_time_sat')->nullable();
            $table->time('end_time_sat')->nullable();
            $table->boolean('sunday')->nullable();
            $table->time('start_time_sun')->nullable();
            $table->time('end_time_sun')->nullable();
            $table->time('duration')->nullable();
            
            $table->string('level')->nullable();            
            $table->string('level_code')->nullable();
            $table->string('level_number')->nullable();
            $table->string('level_label')->nullable();
            
            $table->text('video1')->nullable();
            $table->text('video2')->nullable();
            $table->text('video3')->nullable();
            
            $table->boolean('dropping')->nullable()->default(false);
                        
            $table->string('default_registration_status')->nullable()->default('pre-registered');
            $table->boolean('is_private')->default(false);
            $table->string('thumbnail')->nullable();
            $table->integer('limit_attendees')->nullable();
            
            $table->string('focus', 40)->nullable();
            $table->string('type', 40)->nullable();
            $table->string('status', 40)->nullable();
            $table->string('public', 20)->nullable();
            
            $table->string('registration_url')->nullable();
            $table->string('private_group_url')->nullable();
            $table->foreignId('user_id')->constrained();            
            // $table->foreignId('created_by')->constrained('users');
            // $table->foreignId('updated_by')->nullable()->constrained('users');
            $table->foreignId('space_id')->nullable()->constrained();
            $table->foreignId('city_id')->nullable()->constrained();
            $table->foreignId('organization_id')->nullable()->constrained();
            $table->foreignId('event_id')->nullable()->constrained();
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
        Schema::dropIfExists('courses');
    }
}
