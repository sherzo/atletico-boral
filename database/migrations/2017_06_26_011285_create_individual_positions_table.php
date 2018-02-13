<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIndividualPositionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('individual_positions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('gp_id')->unsigned();
            $table->foreign('gp_id')->references('id')->on('general_positions')->onDelete('Cascade');
            $table->string('position', 50);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('individual_positions');
    }
}
