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
        Schema::dropIfExists('orders');
        Schema::create('orders', function (Blueprint $table) {
            
            $table->increments('id')->index();
            $table->smallInteger('vaccination_id')->unsigned()->nullable()->index();
            $table->Integer('quantity')->unsigned()->nullable()->index();
            $table->Integer('response_quantity')->unsigned()->nullable()->index();
            $table->smallInteger('status')->default(1);
            $table->smallInteger('user_id')->unsigned()->nullable()->index();

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
