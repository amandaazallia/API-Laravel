<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSearchDatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('search_datas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('depart_city');
            $table->string('arrive_city');
            $table->string('return_date');
            $table->string('adult');
            $table->string('child');
            $table->string('inf');
            $table->string('token');
            $table->string('ver');
            $table->string('result');
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
        Schema::drop('search_datas');
    }
}
