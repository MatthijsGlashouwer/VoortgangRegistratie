<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTblfeedbackTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tblfeedback', function(Blueprint $table)
		{
			$table->integer('Id')->primary();
			$table->integer('Userproject_Id');
			$table->integer('Role_Id');
			$table->integer('Authoruser_Id');
			$table->text('Value', 65535);
			$table->integer('Rating');
			$table->date('Datestart');
			$table->date('Dateupdate');
			$table->integer('Updateuser_Id');
			$table->date('Dateend');
			$table->boolean('Done');
			$table->boolean('Checked');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tblfeedback');
	}

}
