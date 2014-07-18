<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSeguimientosProspectoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('seguimientos_prospecto', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('id_prospecto')->unsigned()->index('`id_prospecto`');
			$table->integer('id_vendedor')->unsigned();
			$table->enum('tipo', array('cita','llamada','visita_fraccionamiento','comentario','nuevo'));
			$table->dateTime('fecha_programada')->nullable();
			$table->text('mensaje');
			$table->timestamps();
			$table->dateTime('deleted_at')->default('0000-00-00 00:00:00');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('seguimientos_prospecto');
	}

}
