<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProspectosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('prospectos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('hash', 10)->index('`hash`');
			$table->integer('id_vendedor')->unsigned()->index('`id_vendedor`');
			$table->string('nombre', 50);
			$table->string('apellido_paterno', 50);
			$table->string('apellido_materno', 50);
			$table->date('fecha_nacimiento');
			$table->string('telefono_casa', 20);
			$table->string('telefono_celular', 20);
			$table->string('email', 80);
			$table->string('como_se_entero', 90);
			$table->enum('status', array('info_incompleta','info_completa','cliente'));
			$table->boolean('validado')->nullable()->default(0);
			$table->smallInteger('completado');
			$table->string('referencia_bancaria', 15);
			$table->timestamps();
			$table->softDeletes();
			$table->index(['nombre','apellido_paterno','apellido_materno'], '`full_name`');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('prospectos');
	}

}
