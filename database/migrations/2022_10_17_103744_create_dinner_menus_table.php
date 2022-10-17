<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDinnerMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dinner_menus', function (Blueprint $table) {
            $table->id();
            $table->UnsignedBigInteger('restaurant_id')->Unsigned()->nullable();
            $table->string('item')->nullable();
            $table->double('price')->default(0);
            $table->foreign('restaurant_id')->references('id')->on('restaurants')->onDelete('restrict');
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
        Schema::dropIfExists('dinner_menus');
    }
}
