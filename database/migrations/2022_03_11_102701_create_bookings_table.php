<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('service_id')->nullable();
            $table->unsignedBigInteger('offer_id')->nullalble();
            $table->string('service_type')->nullable();
            $table->string('capacity')->nullable();
            $table->string('start_time')->nullable();
            $table->string('end_time')->nullable();
            $table->string('date')->nullable();
            $table->string('rate')->nullable();
            $table->string('hours')->nullable();
            $table->string('payable_amount')->nullable();
            $table->string('status')->default('pending');
            //user information
            $table->string('user_name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('cnic')->nullable();
            $table->string('message')->nullable();
            $table->string('is_seen')->default(false);
            //steper information updated
            $table->boolean('updated_service_detail')->default(false);
            $table->boolean('updated_user_detail')->default(false);
            $table->boolean('updated_payment_method')->default(false);
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
        Schema::dropIfExists('bookings');
    }
}
