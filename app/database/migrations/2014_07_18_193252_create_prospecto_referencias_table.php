<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProspectoReferenciasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('prospecto_referencias', function(Blueprint $table)
		{
			$table->integer('id_prospecto')->unsigned()->primary();
			$table->string('ref1_apellido_paterno', 60);
			$table->string('ref1_apellido_materno', 60);
			$table->string('ref1_nombre', 60);
			$table->string('ref1_telefono', 20);
			$table->string('ref1_celular', 20);
			$table->string('ref2_apellido_paterno', 60);
			$table->string('ref2_apellido_materno', 60);
			$table->string('ref2_nombre', 60);
			$table->string('ref2_telefono', 20);
			$table->string('ref2_celular', 20);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('prospecto_referencias');
	}

}
