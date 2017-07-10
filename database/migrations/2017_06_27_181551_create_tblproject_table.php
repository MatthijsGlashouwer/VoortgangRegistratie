<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTblprojectTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tblproject', function(Blueprint $table)
		{
			$table->increments('Id');
			$table->string('Title', 50);
			$table->text('Description', 65535);
			$table->integer('Status_Id');
			$table->integer('Startdate')->unsigned();
			$table->integer('Updatedate')->unsigned();
			$table->integer('Updateuser_Id')->unsigned();
			$table->integer('Enddate')->unsigned();
			$table->integer('Deadline')->unsigned();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tblproject');
	}

}
