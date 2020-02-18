<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChildfileVaccination extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('childfile_vaccination', function (Blueprint $table) {

            $table->bigInteger('vaccination_id')->unsigned();
        
            $table->bigInteger('childfile_id')->unsigned();
        
            $table->foreign('vaccination_id')
            ->references('id')
            ->on('vaccinations')
            ->onDelete('cascade');
        
            $table->foreign('childfile_id')
                  ->references('id')
                  ->on('childfiles')
                  ->onDelete('cascade');
        
        });
        // $table->unique(['vaccination_id', 'childfile_id']);
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
