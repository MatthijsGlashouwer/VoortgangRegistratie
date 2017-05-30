<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tbllearningunit extends Model
{
    protected $table =	"tbllearningunit";
    
    public $timestamps = false;

    $Title = App\tbllearningunit::all();

    foreach ($Title as $flight) {

    	echo $Title->name;

    }

}
