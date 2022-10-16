<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('app_settings', function (Blueprint $table) {
            $table->id();
            $table->string('app_title')->nullable();
            $table->string('logo')->nullable();
            $table->string('favicon')->nullable();
            $table->string('top_nav_bg')->nullable();
            $table->string('top_nav_color')->nullable();
            $table->string('top_nav_scroll_color')->nullable();
            $table->string('primary_color')->nullable();
            $table->string('primary_bg_color')->nullable();
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
        Schema::dropIfExists('app_settings');
    }
}
