<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlacesPicturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('places_pictures', function (Blueprint $table) {
            $table->increments('id');
	        $table->integer('places_id')->unsigned();
	        //$table->foreign('place_id')->references('id')->on('places');
	        $table->integer('pictures_id')->unsigned();
	        //$table->foreign('picture_id')->references('id')->on('pictures');
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
        Schema::dropIfExists('places_pictures');
    }
}
