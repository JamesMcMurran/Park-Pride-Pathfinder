<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('amenities_places', function (Blueprint $table) {
	        $table->foreign('amenities_id')->references('id')->on('amenities');
	        $table->foreign('place_id')->references('id')->on('places');
        });

	    Schema::table('groups_places', function (Blueprint $table) {
		    $table->foreign('group_id')->references('id')->on('groups');
		    $table->foreign('place_id')->references('id')->on('places');
	    });

	    Schema::table('groups_users', function (Blueprint $table) {
		    $table->foreign('group_id')->references('id')->on('groups');
		    $table->foreign('user_id')->references('id')->on('users');
	    });
	    Schema::table('places_pictures', function (Blueprint $table) {
		    $table->foreign('place_id')->references('id')->on('places');
		    $table->foreign('picture_id')->references('id')->on('pictures');
	    });
	    Schema::table('amenities_pictures', function (Blueprint $table) {
		    $table->foreign('amenities_id')->references('id')->on('amenities');
		    $table->foreign('picture_id')->references('id')->on('pictures');
	    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('amenities_places', function (Blueprint $table) {
            $table->dropForeign('amenities_places_amenities_id_foreign');//groups_places_place_id_foreign
	        $table->dropForeign('amenities_places_place_id_foreign');
        });
    }
}