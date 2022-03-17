<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestValidatorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request_validators', function (Blueprint $table) {
            $table->string('id');
            $table->text('secret_hash')->nullable();
            $table->timestamp('secret_expiry')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('type')->default('route');
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
        Schema::dropIfExists('request_validators');
    }
}
