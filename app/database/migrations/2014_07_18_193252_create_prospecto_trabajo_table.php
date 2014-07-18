<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProspectoTrabajoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('prospecto_trabajo', function(Blueprint $table)
		{
			$table->integer('id_prospecto')->unsigned()->index('`id_prospecto`');
			$table->string('central_obrera', 20);
			$table->integer('id_empresa')->unsigned();
			$table->string('nombre_empresa', 100);
			$table->string('nrp', 20);
			$table->text('direccion_empresa');
			$table->string('telefono', 20);
			$table->string('horario', 50);
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
		Schema::drop('prospecto_trabajo');
	}

}
