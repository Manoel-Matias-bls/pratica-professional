<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToEntradaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('entrada', function(Blueprint $table)
		{
			$table->foreign('valores_id', 'fk_entrada_valores')->references('id')->on('valores')->onUpdate('cascade')->onDelete('cascade');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('entrada', function(Blueprint $table)
		{
			$table->dropForeign('fk_entrada_valores');
		});
	}

}
