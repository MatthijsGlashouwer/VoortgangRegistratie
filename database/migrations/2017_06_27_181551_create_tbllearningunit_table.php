<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbllearningunitTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbllearningunit', function(Blueprint $table)
		{
			$table->integer('Id')->primary();
			$table->string('Title', 50);
			$table->string('Link', 150);
			$table->integer('NLQF');
			$table->integer('Cohort');
			$table->integer('Crebo');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tbllearningunit');
	}

}
