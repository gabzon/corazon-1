<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->decimal('price')->nullable();
            $table->decimal('reduced_price')->nullable();
            $table->string('currency', 20)->nullable();
            $table->foreignId('user_id')->nullable()->constrained();
            $table->foreignId('organization_id')->nullable()->constrained();
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
        Schema::dropIfExists('settings');
    }
}
