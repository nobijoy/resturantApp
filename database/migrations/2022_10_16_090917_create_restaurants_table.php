<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestaurantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurants', function (Blueprint $table) {
            $table->id();
            $table->UnsignedBigInteger('area_id')->Unsigned()->nullable();
            $table->string('name')->nullable();
            $table->string('cover_img')->nullable();
            $table->text('short_note')->nullable();
            $table->string('gallery_img')->nullable();
            $table->string('menu_card')->nullable();
            $table->string('address')->nullable();
            $table->longText('map')->nullable();
            $table->string('email')->nullable();
            $table->string('contact_number')->nullable();
            $table->string('lunch_time')->nullable();
            $table->string('dinner_time')->nullable();
            $table->tinyInteger('is_active')->default('1');
            $table->foreign('area_id')->references('id')->on('areas')->onDelete('restrict');
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
        Schema::dropIfExists('restaurants');
    }
}
