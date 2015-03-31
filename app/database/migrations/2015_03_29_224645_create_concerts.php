<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConcerts extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('concerts', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('Artiste');
            $table->string('Lieu');
            $table->string('Ville');
            $table->string('slug');
            $table->text('adresse');
            $table->text('description');
            $table->text('image');
            $table->text('video');
            $table->text('tag_1');
            $table->text('tag_2');
            $table->dateTime('date');
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
		//
	}

}
