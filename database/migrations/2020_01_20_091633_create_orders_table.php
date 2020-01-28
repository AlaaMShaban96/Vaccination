<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            
            $table->bigIncrements('id');
            $table->bigInteger('vaccination_id')->unsigned()->default(1);
            $table->string('name');
            $table->string('dose_time'); 
            $table->Integer('quantity')->unsigned()->nullable();
            $table->smallInteger('status')->default(1);
            $table->bigInteger('user_id')->unsigned()->nullable();

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
        Schema::dropIfExists('orders');
    }
}
