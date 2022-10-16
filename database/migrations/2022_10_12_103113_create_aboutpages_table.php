<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutpagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aboutpages', function (Blueprint $table) {
            $table->id();
            $table->string('cover_img')->nullable();
            $table->string('title')->nullable();
            $table->string('short_note')->nullable();
            $table->string('section_2_img')->nullable();
            $table->string('section_2_title')->nullable();
            $table->string('section_2_short_note')->nullable();
            $table->text('section_2_description')->nullable();
            $table->string('section_3_img')->nullable();
            $table->string('section_3_title')->nullable();
            $table->text('section_3_description')->nullable();
            $table->string('section_4_img')->nullable();
            $table->string('section_4_title')->nullable();
            $table->text('section_4_description')->nullable();
            $table->string('section_5_img')->nullable();
            $table->string('section_5_title')->nullable();
            $table->text('section_5_description')->nullable();
            $table->string('section_6_img')->nullable();
            $table->string('section_6_title')->nullable();
            $table->text('section_6_description')->nullable();
            $table->string('section_7_title')->nullable();
            $table->string('section_7_short_note')->nullable();
            $table->text('section_7_description')->nullable();
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
        Schema::dropIfExists('aboutpages');
    }
}
