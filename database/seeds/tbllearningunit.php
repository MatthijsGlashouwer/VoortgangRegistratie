<?php

use Illuminate\Database\Seeder;

class tbllearningunit extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbllearningunit')->insert(
            [
                'Title' => str_random(10),
                'Link' => str_random(10),
                'NLQF' => 1,
                'Cohort' => 1,
                'Crebo' => 1,
            ],
            [
                'Title' => str_random(10),
                'Link' => str_random(10),
                'NLQF' => 1,
                'Cohort' => 1,
                'Crebo' => 1,
            ]);
    }
}
