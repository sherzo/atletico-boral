<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAthleteTeamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('athlete_team', function (Blueprint $table) {
            $table->unsignedInteger('athlete_id');
            $table->unsignedInteger('team_id');

            $table->primary(['athlete_id', 'team_id']);

            $table->foreign('athlete_id')->references('id')->on('athletes');
            $table->foreign('team_id')->references('id')->on('teams');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('athlete_team');
    }
}
