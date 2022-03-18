<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVaccinationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('vaccinations');
        Schema::create('vaccinations', function (Blueprint $table) {
            $table->smallIncrements('id')->index();
            $table->string('name');
            $table->Integer('quantity');
            $table->tinyInteger('time_id')->unsigned()->nullable()->index();
            $table->timestamps();

            $table->foreign('time_id')
            ->references('id')
            ->on('times')
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
        Schema::dropIfExists('vaccinations');
    }
}
