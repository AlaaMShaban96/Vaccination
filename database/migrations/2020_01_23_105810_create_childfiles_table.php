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
        
        Schema::dropIfExists('childfiles');

        Schema::create('childfiles', function (Blueprint $table) {

            $table->bigIncrements('id')->index();

            $table->smallInteger('vaccination_id')->unsigned()->index();
            $table->smallInteger('user_id')->unsigned()->index();
            $table->bigInteger('child_id')->unsigned()->index();

           
            
            $table->foreign('vaccination_id')
                ->references('id')
                ->on('vaccinations')
                ->onDelete('cascade');

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
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
