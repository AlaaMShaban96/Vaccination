<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChildrenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('children');

        Schema::create('children', function (Blueprint $table) {

            $table->bigIncrements('id')->index();
            $table->string('name');
            $table->smallInteger('user_id')->unsigned()->index();
            $table->date('date_of_birth');
            $table->string('home_adress');
            $table->bigInteger('telephone_number');
            $table->boolean('status')->default(1);
            $table->timestamps();

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
        Schema::dropIfExists('children');
    }
}
