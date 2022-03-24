<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoodSuppliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('food_suppliers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('logo_image')->default('images/default.png');
            $table->string('avatar')->nullable();
            $table->string('gender')->nullable();
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('experience')->nullable();
            $table->string('bio')->nullable();
            $table->string('opening_time')->nullable();
            $table->string('closing_time')->nullable();

            $table->boolean('supplier_entity_updated')->default(false);
            $table->boolean('supplier_logo_updated')->default(false);
            $table->boolean('supplier_schedule_updated')->default(false);
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
        Schema::dropIfExists('food_suppliers');
    }
}
