<?php

use Illuminate\Database\Seeder;

class tblproject extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tblproject')->insert(
            [
                'Title' => str_random(10),
                'Description' => str_random(10),
                'Status_Id' => 1,
                'Startdate' => 1,
                'Updatedate' => 1,
                'Updateuser_Id' => 1,
                'Enddate' => 1,
                'Deadline' => 1,
            ],
            [
                'Title' => str_random(10),
                'Description' => str_random(10),
                'Status_Id' => 1,
                'Startdate' => 1,
                'Updatedate' => 1,
                'Updateuser_Id' => 1,
                'Enddate' => 1,
                'Deadline' => 1,
            ],
            [
                'Title' => str_random(10),
                'Description' => str_random(10),
                'Status_Id' => 1,
                'Startdate' => 1,
                'Updatedate' => 1,
                'Updateuser_Id' => 1,
                'Enddate' => 1,
                'Deadline' => 1,
            ],
            [
                'Title' => str_random(10),
                'Description' => str_random(10),
                'Status_Id' => 1,
                'Startdate' => 1,
                'Updatedate' => 1,
                'Updateuser_Id' => 1,
                'Enddate' => 1,
                'Deadline' => 1,
            ]
        );
    }
}
