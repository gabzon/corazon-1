<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description')->nullable();
            $table->text('embed')->nullable();
            $table->text('url')->nullable();
            $table->string('level')->nullable();
            $table->string('difficulty')->nullable();            
            $table->string('videoid')->nullable(); // Video id according to the desired platforme
            $table->foreignId('organization_id')->nullable()->constrained();
            $table->foreignId('user_id')->constrained(); 
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
        Schema::dropIfExists('videos');
    }
}
