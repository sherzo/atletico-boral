<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAthletesAboutTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('athletes_about', function (Blueprint $table){
            $table->increments('id');
            $table->integer('athlete_id')->unsigned();
            $table->foreign('athlete_id')->references('id')->on('athletes')->onDelete('Cascade');
            $table->enum('foot', array('DIESTRO', 'ZURDO'));
            $table->integer('age');
            $table->string('sports', 100);
            $table->string('soccer', 100);
            $table->string('favorites', 100);
            $table->string('goalkeeper', 100);
            $table->string('fanA', 100);
            $table->string('fanI', 100);
            $table->string('country_team', 100);
            $table->string('profession');
            $table->string('occupation');
            $table->longText('description_football');
            $table->longText('description_like');
            $table->string('nickname');
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
        Schema::dropIfExists('athletes_about');
    }
}
