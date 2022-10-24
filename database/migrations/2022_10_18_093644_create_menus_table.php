<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->UnsignedBigInteger('menu_sub_category_id')->Unsigned()->nullable();
            $table->string('name')->nullable();
            $table->string('image')->nullable();
            $table->double('price')->nullable();
            $table->string('description')->nullable();
            $table->tinyInteger('is_active')->default(1);
            $table->foreign('menu_sub_category_id')->references('id')->on('menu_sub_categories')->onDelete('restrict');
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
        Schema::dropIfExists('menus');
    }
}
