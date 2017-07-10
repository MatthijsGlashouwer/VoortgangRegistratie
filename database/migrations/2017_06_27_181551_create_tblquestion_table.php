<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTblquestionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tblquestion', function(Blueprint $table)
		{
			$table->integer('Id')->primary();
			$table->integer('LE id');
			$table->string('Type', 50);
			$table->text('Value', 65535);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tblquestion');
	}

}
