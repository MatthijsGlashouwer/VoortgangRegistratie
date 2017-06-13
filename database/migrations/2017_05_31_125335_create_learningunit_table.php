<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLearningunitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('learningunit', function (Blueprint $table) {
            $table->increments('Id');

            $table->string('Title', 255);
            $table->string('Link', 255);
            $table->integer('NLQF');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('learningunit', function (Blueprint $table) {
            //
        });
    }
}
