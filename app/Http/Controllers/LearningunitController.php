<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\tbllearningunit;
use App\tblusergroup;
use Input;
use App;


class learningunitcontroller extends Controller
{
   public function index()
      {
   		return view('leereenheden.index');
      }

   public function insertform()
    {
      return view('leereenheden.create');
    }

   public function store(Request $request)
   {

      $tbllearningunit = $request->input('LEname');
      // DB::insert('',[$tbllearningunit]);
   	/*	$tbllearningunit = new tbllearningunit;

         $tbllearningunit->Title = $request->Title;
         
         $tbllearningunit->NLQF = $request->NLQF;
         
         $tbllearningunit->Cohort = $request->Cohort;
         
         $tbllearningunit->Crebo = $request->Crebo;
   		
         $tbllearningunit->save(); */

         return view('leereenheden.create')->with('tbllearningunit',$tbllearningunit); 

   }

   public function view()
   {
   		$tbllearningunit = tbllearningunit::find([2,5,3]);
   		return view('leereenheden.view')->with('tbllearningunit',$tbllearningunit);

   }
   public function edit()
   {     
         $tbllearningunit = App\tbllearningunit::find(2);

         $tbllearningunit->Title = 'test';

         $tbllearningunit->save();

   		return view('leereenheden.edit');

   }

   public function delete()
   {
         $tbllearningunit = App\tbllearningunit::find(8);

         $tbllearningunit->delete();


   }
}



