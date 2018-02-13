<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCategoryTime extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_time', function (Blueprint $table) {
            $table->integer('category_id')->unsigned();
            $table->integer('time_id')->unsigned();
            $table->primary(['category_id', 'time_id']);
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('time_id')->references('id')->on('times');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category_time');
    }
}
