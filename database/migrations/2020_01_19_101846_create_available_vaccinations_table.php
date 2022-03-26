<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAvailableVaccinationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    { 
        Schema::create('available_vaccinations', function (Blueprint $table) {
            
            
            $table->bigIncrements('id');
            $table->bigInteger('vaccination_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();
            $table->Integer('quantity')->unsigned()->nullable();

            $table->foreign('user_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade');
                  
            $table->foreign('vaccination_id')
                  ->references('id')
                  ->on('vaccinations')
                  ->onDelete('cascade');

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
        Schema::dropIfExists('available_vaccinations');
    }
}
