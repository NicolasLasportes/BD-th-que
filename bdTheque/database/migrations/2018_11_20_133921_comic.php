<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Comic extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comic', function (Blueprint $table) {
            $table->increments('comic_id');
            $table->string('comic_name');
            $table->string('comic_cover');
            $table->integer('comic_volume');
            $table->string('comic_edition');
            $table->float('comic_mark')->nullable();
            $table->date('comic_creation_date');
            $table->boolean('comic_wished');
            $table->boolean('comic_in_collection');
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
        Schema::drop('comic');
    }
}
