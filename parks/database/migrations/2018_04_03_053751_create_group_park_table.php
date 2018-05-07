<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroupsParksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('group_park', function (Blueprint $table) {
            $table->increments('id');
	        $table->integer('group_id');
	        $table->foreign('group_id')->references('id')->on('groups');
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
        Schema::dropIfExists('group_park');
    }
}
