<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UserVaccination extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_vaccination', function (Blueprint $table) {

            $table->smallInteger('vaccination_id')->unsigned()->index();
            $table->Integer('quantity')->unsigned()->nullable();
            $table->smallInteger('user_id')->unsigned()->index();

            $table->foreign('vaccination_id')
                  ->references('id')
                  ->on('vaccinations')
                  ->onDelete('cascade');

            $table->foreign('user_id')
                  ->references('id')
                  ->on('users')
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
        //
    }
}
