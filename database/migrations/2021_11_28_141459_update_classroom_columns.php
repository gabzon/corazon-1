<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateClassroomColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::rename('classrooms', 'spaces');
        Schema::table('courses', function (Blueprint $table) {            
            $table->dropConstrainedForeignId('classroom_id');            
            // $table->renameColumn('classroom_id ', 'space_id');
            $table->foreignId('space_id')->nullable()->constrained();
        });        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->dropConstrainedForeignId('space_id');
            // $table->renameColumn('space_id','classroom_id');
            $table->foreignId('classroom_id')->nullable()->constrained();
        });

        // Schema::rename('spaces','classrooms');
    }
}