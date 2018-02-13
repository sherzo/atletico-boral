<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAverageStatisticsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('average_statistics', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('gs_id')->unsigned();
            $table->foreign('gs_id')->references('id')->on('general_statistics')->onDelete('Cascade');
            $table->string('action', 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('average_statistics');
    }
}
