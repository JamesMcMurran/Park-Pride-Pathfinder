<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trails', function (Blueprint $table) {
            $table->increments('id',true);
	        $table->string('type', 100);
	        $table->string('difficulty', 100);
	        $table->longText('description');

	        #Would be better to brake this off for Database normalization
	        $table->string('blaze', 100);
	        $table->string('biking', 1);
	        $table->string('walking', 1);
	        $table->string('running', 1);
	        $table->string('strollers', 1);
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
        Schema::dropIfExists('trails');
    }
}
