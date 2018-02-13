<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStatisticsTournamentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('statistics_tournament', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('athletes_id')->unsigned();
            $table->foreign('athletes_id')->references('id')->on('athletes')->onDelete('Cascade');
            $table->integer('avg_id')->unsigned();
            $table->foreign('avg_id')->references('id')->on('average_statistics');
            $table->integer('tournament_id')->unsigned();
            $table->foreign('tournament_id')->references('id')->on('tournaments')->onDelete('Cascade');
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
        Schema::dropIfExists('statistics_tournament');
    }
}
