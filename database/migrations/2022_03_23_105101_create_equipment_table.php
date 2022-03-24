<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquipmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipment', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            //basic information for venues
            $table->string('name')->nullable();
            $table->string('color')->nullable();
            $table->string('weight')->nullable();
            $table->string('quantity')->nullable();
            $table->string('location')->nullable();
            $table->text('description')->nullable();
            //gallery images store for venues
            $table->string('logo_image')->default('images/default.png');
            //schedule setting for venues
            $table->string('opening_time')->nullable();
            $table->string('closing_time')->nullable();
            //pricing for vunues
            $table->string('hourly_rate')->nullable();
    
            //updating boolean values to track all steps are completed for venues or not default is false
            $table->boolean('gallery_updated')->default(false);
            $table->boolean('schedule_updated')->default(false);
            $table->boolean('pricing_updated')->default(false);

            //status for publish and pause
            $table->string('status')->default('Inactive');

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
        Schema::dropIfExists('equipment');
    }
}
