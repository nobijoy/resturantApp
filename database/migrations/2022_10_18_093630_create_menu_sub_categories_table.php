<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenuSubCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu_sub_categories', function (Blueprint $table) {
            $table->id();
            $table->UnsignedBigInteger('menu_category_id')->Unsigned()->nullable();
            $table->string('name')->nullable();
            $table->string('short_note')->nullable();
            $table->tinyInteger('is_active')->default(1);
            $table->foreign('menu_category_id')->references('id')->on('menu_categories')->onDelete('restrict');
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
        Schema::dropIfExists('menu_sub_categories');
    }
}
