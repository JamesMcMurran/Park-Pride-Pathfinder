<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParksPicturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('park_picture', function (Blueprint $table) {
            $table->increments('id');
	        $table->integer('park_id');
	        $table->foreign('park_id')->references('id')->on('parks');
	        $table->integer('picture_id');
	        $table->foreign('picture_id')->references('id')->on('pictures');
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
        Schema::dropIfExists('park_picture');
    }
}
