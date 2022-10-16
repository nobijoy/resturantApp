<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomepagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homepages', function (Blueprint $table) {
            $table->id();
            $table->string('carousel')->nullable();
            $table->string('section_2_img_1')->nullable();
            $table->string('section_2_img_2')->nullable();
            $table->string('section_2_img_3')->nullable();
            $table->string('section_img_3')->nullable();
            $table->string('section_img_4')->nullable();

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
        Schema::dropIfExists('homepages');
    }
}
