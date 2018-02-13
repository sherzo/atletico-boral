<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAthletesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('athletes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nationality', 50);
            $table->string('dni');
            $table->string('name', 50);
            $table->string('surname', 50);
            $table->string('url', 155)->nullable();
            $table->date('birthdate');
            $table->integer('age')->nullable();
            $table->float('height')->nullable();
            $table->float('weight')->nullable();
            $table->integer('representative_id')->unsigned()->nullable();
            $table->foreign('representative_id')->references('id')->on('representatives')->nullable();
            $table->integer('position_id')->unsigned()->nullable();
            $table->foreign('position_id')->references('id')->on('individual_positions')->nullable();
            $table->string('from', 50)->nullable();
            //$table->integer('function_id')->unsigned();
            //$table->foreign('function_id')->references('id')->on('functions_position');
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
        Schema::dropIfExists('athletes');
    }
}
