<?php

namespace App\Http\Controllers;




class LearningunitController extends Controller

{

public function index()
{
	return view('leereenheid');
}
  
public function leereenhedenView(){
        $learningunit = tbllearningunit::all();
        return view ('leereenheid')->with('leereenheid',$tbllearningunit);
    }




}