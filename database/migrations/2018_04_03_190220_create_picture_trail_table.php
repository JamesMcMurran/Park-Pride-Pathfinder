<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePicturesTrailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('picture_trail', function (Blueprint $table) {
            $table->increments('id');
	        $table->integer('picture_id');
	        $table->foreign('picture_id')->references('id')->on('pictures');
	        $table->integer('trail_id');
	        $table->foreign('trail_id')->references('id')->on('trails');
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
        Schema::dropIfExists('picture_trail');
    }
}
