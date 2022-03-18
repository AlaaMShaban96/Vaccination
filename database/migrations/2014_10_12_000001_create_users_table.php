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
        Schema::dropIfExists('users');
        Schema::create('users', function (Blueprint $table) {

            $table->smallIncrements('id')->index();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
         
            $table->boolean('status')->nullable()->default(true);
            $table->smallInteger('account_type');
            $table->smallInteger('city_id')->unsigned()->index();
            $table->bigInteger('phone_number')->unsigned();
            $table->rememberToken()->default('OcEMI0gfSxQ3ZvPOtiCBj0fOr9P1BmbchdX9wDJvgXPzRaa4pT0zhSyWrscR');
            $table->timestamps();

            $table->foreign('city_id')
            ->references('id')
            ->on('cities')
            ->onDelete('cascade');

          
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
