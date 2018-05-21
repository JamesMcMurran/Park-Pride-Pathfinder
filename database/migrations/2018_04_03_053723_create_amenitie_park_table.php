<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAmenitiesParksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('amenitie_park', function (Blueprint $table) {
            $table->increments('id');
	        $table->integer('amenitie_id');
	        $table->foreign('amenitie_id')->references('id')->on('amenities');
	        $table->integer('park_id');
	        $table->foreign('park_id')->references('id')->on('parks');
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
        Schema::dropIfExists('amenitie_park');
    }
}
