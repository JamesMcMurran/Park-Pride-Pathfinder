<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAmenitiesPicturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('amenities_pictures', function (Blueprint $table) {
            $table->increments('id');
	        $table->integer('amenities_id');
	        //$table->foreign('amenities_id')->references('id')->on('amenities');
	        $table->integer('picture_id');
	       // $table->foreign('picture_id')->references('id')->on('pictures');
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
	    Schema::dropIfExists('amenities_pictures');
    }
}
