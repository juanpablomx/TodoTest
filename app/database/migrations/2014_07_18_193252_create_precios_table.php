<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePreciosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('precios', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('id_obra')->unsigned();
			$table->string('nombre');
			$table->decimal('precio_m2');
			$table->boolean('enganche');
			$table->boolean('mensualidades');
			$table->smallInteger('mensualidades_min');
			$table->smallInteger('mensualidades_max');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('precios');
	}

}
