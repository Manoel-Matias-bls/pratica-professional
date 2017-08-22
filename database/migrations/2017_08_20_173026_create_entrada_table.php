<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEntradaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('entrada', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('placa', 45)->nullable();
			$table->dateTime('entrada')->nullable();
			$table->dateTime('saida')->nullable();
			$table->float('total', 10, 0)->nullable();
			$table->integer('valores_id')->index('fk_entrada_valores_idx')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('entrada');
	}

}
