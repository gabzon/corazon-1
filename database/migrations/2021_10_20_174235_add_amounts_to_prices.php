<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAmountsToPrices extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('prices', function (Blueprint $table) {
            $table->dropColumn('expiry_date');
            $table->dropColumn('can_expire');

            $table->decimal('amount2')->nullable();
            $table->string('label2')->nullable();
            $table->dateTime('deadline2')->nullable();
            
            $table->decimal('amount3')->nullable();
            $table->string('label3')->nullable();
            $table->dateTime('deadline3')->nullable();

            $table->decimal('amount4')->nullable();
            $table->string('label4')->nullable();
            $table->dateTime('deadline4')->nullable();

            $table->decimal('amount5')->nullable();
            $table->string('label5')->nullable();
            $table->dateTime('deadline5')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('prices', function (Blueprint $table) {
            $table->boolean('can_expire')->nullable();
            $table->date('expiry_date')->nullable();

            $table->dropColumn('amount2');
            $table->dropColumn('label2');
            $table->dropColumn('deadline2');
            
            $table->dropColumn('amount3');
            $table->dropColumn('label3');
            $table->dropColumn('deadline3');

            $table->dropColumn('amount4');
            $table->dropColumn('label4');
            $table->dropColumn('deadline4');

            $table->dropColumn('amount5');
            $table->dropColumn('label5');
            $table->dropColumn('deadline5');
        });
    }
}
