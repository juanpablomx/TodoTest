<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePagosProspectoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pagos_prospecto', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('id_prospecto')->unsigned()->index('`id_cliente`');
			$table->integer('id_inmueble')->unsigned();
			$table->enum('tipo', array('deposito'));
			$table->string('numero_recibo', 15);
			$table->string('referencia', 15);
			$table->dateTime('fecha');
			$table->decimal('monto', 10);
			$table->string('comentario');
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
		Schema::drop('pagos_prospecto');
	}

}
