<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAthletesMedicalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('athletes_medical', function (Blueprint $table) {
            $table->increments('id');
            $table->string('allergic', 50);
            $table->integer('athletes_id')->unsigned();
            $table->foreign('athletes_id')->references('id')->on('athletes')->onDelete('Cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('athletes_medical');
    }
}
