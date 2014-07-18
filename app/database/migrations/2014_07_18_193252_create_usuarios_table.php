<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsuariosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('usuarios', function(Blueprint $table)
		{
			$table->increments('id');
			$table->enum('type', array('vendedor','gerente','admin','contabilidad','mesa_control'));
			$table->string('nombre', 250);
			$table->string('email', 80);
			$table->string('password', 80);
			$table->string('remember_token', 100);
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
		Schema::drop('usuarios');
	}

}
