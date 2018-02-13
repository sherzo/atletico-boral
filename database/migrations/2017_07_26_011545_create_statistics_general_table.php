<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStatisticsGeneralTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('statistics_general', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('athletes_id')->unsigned();
            $table->foreign('athletes_id')->references('id')->on('athletes')->onDelete('Cascade');
            $table->integer('avg_id')->unsigned();
            $table->foreign('avg_id')->references('id')->on('average_statistics');
            $table->unsignedInteger('match_id');
            $table->foreign('match_id')->references('id')->on('matches');
            $table->float('total');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('statistics_general');
    }
}
