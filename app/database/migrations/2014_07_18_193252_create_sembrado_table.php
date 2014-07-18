<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSembradoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sembrado', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('id_obra')->index('`id_obra`');
			$table->string('manzana', 4);
			$table->smallInteger('lote');
			$table->string('calle', 150);
			$table->smallInteger('numero');
			$table->string('numero_interior', 5);
			$table->decimal('m2_terreno', 6);
			$table->enum('status', array('libre','apartado','vencido','titulado'));
			$table->decimal('medidas_1', 10, 0);
			$table->decimal('medidas_2', 10, 0);
			$table->decimal('medidas_3', 10, 0);
			$table->decimal('medidas_4', 10, 0);
			$table->string('colindancia_1', 120);
			$table->string('colindancia_2', 120);
			$table->string('colindancia_3', 120);
			$table->string('colindancia_4', 120);
			$table->string('orientacion_1', 20);
			$table->string('orientacion_2', 20);
			$table->string('orientacion_3', 20);
			$table->string('orientacion_4', 20);
			$table->string('extras', 1);
			$table->decimal('_map_x', 8, 3);
			$table->decimal('_map_y', 8, 3);
			$table->integer('id_vendedor')->unsigned()->nullable();
			$table->integer('id_prospecto')->unsigned()->nullable();
			$table->dateTime('fecha_apartado')->nullable();
			$table->decimal('precio_m2_apartado')->nullable();
			$table->boolean('apartado_enganche')->nullable();
			$table->boolean('apartado_mensualidades')->nullable();
			$table->string('modo_apartado', 20)->nullable();
			$table->decimal('precio_venta', 10)->nullable();
			$table->decimal('monto_mensualidad');
			$table->decimal('monto_pagado')->nullable();
			$table->smallInteger('pagos_pagados')->nullable();
			$table->dateTime('ultimo_pago')->nullable();
			$table->dateTime('fecha_titulado')->nullable();
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
		Schema::drop('sembrado');
	}

}
