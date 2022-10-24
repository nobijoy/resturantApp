<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactpagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contactpages', function (Blueprint $table) {
            $table->id();
            $table->string('cover_img')->nullable();
            $table->string('location_img')->nullable();
            $table->string('cancel_booking_img')->nullable();
            $table->string('feedback_img')->nullable();
            $table->string('career_img')->nullable();
            $table->string('title')->nullable();
            $table->string('short_note')->nullable();
            $table->string('address')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('customer_care_email')->nullable();
            $table->text('recruitment')->nullable();
            $table->text('accounts')->nullable();
            $table->text('payroll')->nullable();
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
        Schema::dropIfExists('contactpages');
    }
}
