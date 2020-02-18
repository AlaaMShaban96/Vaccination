<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->smallInteger('status')->default(1);
            $table->smallInteger('account_type');
            $table->bigInteger('city_id')->unsigned();
            $table->bigInteger('phone_number')->unsigned();
            $table->rememberToken()->default('OcEMI0gfSxQ3ZvPOtiCBj0fOr9P1BmbchdX9wDJvgXPzRaa4pT0zhSyWrscR');
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
        Schema::dropIfExists('users');
    }
}
