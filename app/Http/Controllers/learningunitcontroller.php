<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\tbllearningunit;
use App\tblusergroup;
use Input;


class learningunitcontroller extends Controller
{
    public function index()
   {
   		return view('leereenheden.index');
   }

   public function create(Request $request)
   {
   		//* $tbllearningunit = new tbllearningunit; 

   		// $Title = $request->('Title');

   		// $tbllearningunit->NLQF = Input::get('NLQF', false);

   		// $tbllearningunit->save(); 

   		return view('leereenheden.create')->with('tbllearningunit',$tbllearningunit);

   }

   public function view()
   {
   		$tbllearningunit = tbllearningunit::find([2,5]);
   		return view('leereenheden.view')->with('tbllearningunit',$tbllearningunit);

   }
   public function edit()
   {
   		return view('leereenheden.edit');

   }

}



