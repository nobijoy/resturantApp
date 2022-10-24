<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Addsluginrestaurantandarea extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('restaurants', function (Blueprint $table) {
            $table->string('slug')->nullable();
        });

        Schema::table('areas', function (Blueprint $table) {
            $table->string('slug')->nullable();
        });

        Schema::table('menu_categories', function (Blueprint $table) {
            $table->string('slug')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('restaurants', function (Blueprint $table) {

        });

        Schema::table('areas', function (Blueprint $table) {

        });

        Schema::table('menu_categories', function (Blueprint $table) {
            
        });
    }
}
