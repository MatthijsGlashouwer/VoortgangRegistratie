<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\tbllearningunit;
use App\tblusergroup;
use App;
use Validator;


class learningunitcontroller extends Controller
{
   public function index()
      {
   		return view('leereenheden.index');
      }

   public function create()
    {
      return view('leereenheden.create');
    }

   public function store(Request $request)
   {
        $rules = array(
            'Title' => 'required',
            'NLQF'  => 'required',
            'Crebo' => 'required',
            'Cohort'  => 'required'
        );


        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return Redirect('leereenheden/create')->withInput()->withErrors($validator->messages());
          //return view('leereenheden.create')->withInput()->withErrors($validator->messages());
        }
        else {
        $tbllearningunit = new tbllearningunit;
        $tbllearningunit->Title = $request->Title;
        $tbllearningunit->NLQF = $request->NLQF;
        $tbllearningunit->Crebo = $request->Crebo;
        $tbllearningunit->Cohort = $request->Cohort;
        $tbllearningunit->save();
        if($tbllearningunit->save()){
            return Redirect('leereenheden/view/1')->withMessage($tbllearningunit->Title . " is toegevoegd.");
        }
        // return view('leereenheden.create')->with('tbllearningunit',$tbllearningunit); 
        }
   }

   public function view()
   {
   		$tbllearningunit = tbllearningunit::all();
   		return view('leereenheden.view')->with('klaar',$tbllearningunit);

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



