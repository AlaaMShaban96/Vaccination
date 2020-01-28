<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChildfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('childfiles', function (Blueprint $table) {
            
            $table->bigIncrements('id');

            $table->bigInteger('vaccination_id')->unsigned();
            $table->bigInteger('child_id')->unsigned();

            $table->foreign('vaccination_id')
                ->references('id')
                ->on('vaccinations')
                ->onDelete('cascade');

            $table->foreign('child_id')
                ->references('id')
                ->on('children')
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
        Schema::dropIfExists('childfiles');
    }
}
