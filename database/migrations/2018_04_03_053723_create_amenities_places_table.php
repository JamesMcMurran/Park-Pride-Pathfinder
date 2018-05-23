<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAmenitiesPlacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	    Schema::dropIfExists('amenities_places');
        Schema::create('amenities_places', function (Blueprint $table) {
            $table->increments('id',true);
	        $table->integer('amenities_id');
	        $table->integer('places_id');
            $table->timestamps();
        });

	    /*Schema::table('amenities_places', function($table) {
		    $table->foreign('amenities_id')->references('id')->on('amenities');
		    $table->foreign('places_id')->references('id')->on('places');
	    });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('amenities_places');
    }
}
