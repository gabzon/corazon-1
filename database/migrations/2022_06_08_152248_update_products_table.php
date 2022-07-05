<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->string('tagline')->after('slug')->nullable();
            $table->text('description')->after('tagline')->nullable();            
            $table->datetime('deadline')->after('description')->nullable();
            $table->decimal('full_price')->after('deadline')->nullable();
            $table->decimal('promo_price')->after('full_price')->nullable();
            $table->string('public')->after('promo_price');
            $table->string('status')->after('public');                        
            $table->integer('ordered')->after('public')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('tagline', 'description','deadline','full_price','promo_price','ordered','status','public');
        });
    }
};
