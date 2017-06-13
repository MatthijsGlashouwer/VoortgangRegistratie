<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tbllearningunit extends Model
{
<<<<<<< HEAD
	protected $table = 'tbllearningunit';
=======
    protected $table =	"tbllearningunit";
    
    public $timestamps = false;

    $Title = App\tbllearningunit::all();

    foreach ($Title as $flight) {

    	echo $Title->name;

    }

>>>>>>> 6b7b553861fd209c750a6916ef4d6c298609ff1d
}
