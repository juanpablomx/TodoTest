<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProspectoDocumentosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('prospecto_documentos', function(Blueprint $table)
		{
			$table->integer('id_prospecto')->unsigned()->index('`id_prospecto`');
			$table->string('identificacion', 250);
			$table->boolean('identificacion_validado');
			$table->string('comprobante_domicilio', 250);
			$table->boolean('comprobante_domicilio_validado');
			$table->string('acta_nacimiento', 250);
			$table->boolean('acta_nacimiento_validado');
			$table->string('curp', 250);
			$table->boolean('curp_validado');
			$table->string('talones_pago', 250);
			$table->boolean('talones_validado')->default(0);
			$table->string('estado_cuenta_sar', 250);
			$table->boolean('estado_cuenta_sar_validado')->default(0);
			$table->timestamps();
			$table->softDeletes();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('prospecto_documentos');
	}

}
