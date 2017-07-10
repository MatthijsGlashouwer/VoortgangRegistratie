<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbluserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbluser', function(Blueprint $table)
		{
			$table->integer('Id')->primary();
			$table->string('Name', 50);
			$table->string('Email', 100);
			$table->string('Phone', 100);
			$table->integer('Student Id');
			$table->integer('Crebo');
			$table->integer('Cohort');
			$table->integer('Role User');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tbluser');
	}

}
