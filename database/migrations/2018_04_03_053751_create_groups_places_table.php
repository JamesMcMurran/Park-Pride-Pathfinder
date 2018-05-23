<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroupsPlacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('group_place', function (Blueprint $table) {
            $table->increments('id',true);
	        $table->integer('group_id');
	        $table->integer('place_id');
	        //$table->foreign('group_id')->references('id')->on('groups');
	        //$table->foreign('place_id')->references('id')->on('parks');
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
        Schema::dropIfExists('group_place');
    }
}
