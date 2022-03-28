<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('service_id');
            $table->string('service_type');
            $table->unsignedBigInteger('user_id');
            $table->string('capacity')->nullable();
            $table->string('start_time')->nullable();
            $table->string('end_time')->nullable();
            $table->string('date')->nullable();
            $table->string('rate')->nullable();
            $table->string('hours')->nullable();
            $table->string('message')->nullable();
            $table->string('remarks')->nullable();
            $table->string('ask_amount')->nullable();
            $table->string('is_seen')->default(false);
            $table->string('status')->default('pending'); //offers status describes default pending, completed, declined
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
        Schema::dropIfExists('offers');
    }
}
