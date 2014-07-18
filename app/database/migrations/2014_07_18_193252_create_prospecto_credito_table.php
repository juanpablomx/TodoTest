<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProspectoCreditoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('prospecto_credito', function(Blueprint $table)
		{
			$table->integer('id_prospecto')->unsigned()->index('`id_prospecto`');
			$table->enum('tipo_credito', array('infonavit_tradicional','fovissste','ninguno','alia2','bancario','cofinanciamiento','contado','imss','infonavit_total','infonavit_subsidio','isfam','subsidia2'));
			$table->string('nss', 11);
			$table->string('curp', 18);
			$table->string('ingresos', 20);
			$table->boolean('pension_alimenticia');
			$table->string('monto_pension', 20);
			$table->timestamps();
			$table->softDeletes()->default('0000-00-00 00:00:00');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('prospecto_credito');
	}

}
