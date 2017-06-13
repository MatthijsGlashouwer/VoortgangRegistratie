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

>>>>>>> origin/Matthijs
}
