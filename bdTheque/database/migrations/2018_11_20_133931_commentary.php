<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Commentary extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commentary', function (Blueprint $table) {
            $table->increments('id_commentary');
            $table->string('author_commentary')->nullable();
            $table->string('content_commentary');
            $table->unsignedInteger('fk_commentary')->nullable();
            $table->unsignedInteger('fk_comic');
            $table->foreign('fk_commentary')
                ->references('id_commentary')->on('commentary')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('fk_comic')
                ->references('comic_id')->on('comic')
                ->onDelete('cascade')
                ->onUpdate('cascade');
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
        Schema::drop('commentary');
    }
}
