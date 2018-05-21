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
        Schema::create('amenitie_picture', function (Blueprint $table) {
            $table->increments('id');
	        $table->integer('amenitie_id');
	        $table->foreign('amenitie_id')->references('id')->on('amenitie');
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
        Schema::dropIfExists('amenitie_picture');
    }
}
