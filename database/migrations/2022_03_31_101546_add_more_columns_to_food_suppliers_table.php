<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMoreColumnsToFoodSuppliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('food_suppliers', function (Blueprint $table) {
            $table->string('business_name')->nullable();
            $table->string('business_email')->nullable();
            $table->string('type')->nullable();
            $table->string('food_types')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('food_suppliers', function (Blueprint $table) {
            //
        });
    }
}
