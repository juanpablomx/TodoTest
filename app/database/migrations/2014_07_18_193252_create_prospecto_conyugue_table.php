<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProspectoConyugueTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('prospecto_conyugue', function(Blueprint $table)
		{
			$table->integer('id_prospecto')->unsigned()->primary();
			$table->string('apellido_paterno', 60);
			$table->string('apellido_materno', 60);
			$table->string('nombre', 60);
			$table->string('nss', 20);
			$table->string('curp', 20);
			$table->string('rfc', 20);
			$table->string('telefono_casa', 20);
			$table->string('telefono_trabajo', 20);
			$table->string('telefono_celular', 20);
			$table->string('escolaridad', 20);
			$table->string('horario_trabajo', 20);
			$table->boolean('is_mixto');
			$table->string('empresa', 80);
			$table->string('nrp', 20);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('prospecto_conyugue');
	}

}
