<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('places', function (Blueprint $table) {
            $table->increments('id',true);
	        $table->string('name', 100);
	        $table->enum('type', ['localPark', 'statePark','national_park',
		        'nature_reserve','protected_area','recreation_ground','village_green','grass','garden']);

	        $table->longText('description');
	        $table->integer('lat');
	        $table->integer('lng');
	        $table->polygon('poly');
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
        Schema::dropIfExists('places');
    }
}
