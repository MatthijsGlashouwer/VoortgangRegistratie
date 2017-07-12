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
   public function store(Request $request)
   {
        $rules = array(
            'Title' => 'required | alpha',
            'NLQF'  => 'required',
            'Crebo' => 'required',
            'Cohort'  => 'required'
        );

        $messages = array(
            'Title.required' => 'Titel is verplicht in te vullen.', 
            'NLQF.required' => 'NLQF is verplicht in te vullen.',
            'Crebo.required' => 'Crebo is verplicht in te vullen.',
            'Cohort.required' => 'Cohort is verplicht in te vullen.'
        );


        $validator = Validator::make($request->all(), $rules,$messages);

        if ($validator->fails()) {
            return Redirect('leereenheden/update/-1')->withInput()->withErrors($validator->messages());
        }
        else {
        $tbllearningunit = new tbllearningunit;
        $tbllearningunit->Title = $request->Title;
        $tbllearningunit->NLQF = $request->NLQF;
        $tbllearningunit->Crebo = $request->Crebo;
        $tbllearningunit->Cohort = $request->Cohort;
        $tbllearningunit->status = 2;
        $tbllearningunit->save();
        if($tbllearningunit->save()){
            return Redirect('leereenheden/view/1')->withMessage($tbllearningunit->Title . " is toegevoegd.");
        }
        }
   }

   public function read()
   {
   		$tbllearningunit = tbllearningunit::all();
   		return view('leereenheden.view')->with('klaar',$tbllearningunit);

   }
   public function update($id = -1)
   {   
      if ($id == -1) {  
        return view('leereenheden.create');
      } else {
        $tbllearningunit = tbllearningunit::find(1);
        $tbllearningunit->Title = 'test';
        $tbllearningunit->save();
        return view('leereenheden.edit');
      }
   }

   public function delete()
   {
         $tbllearningunit = App\tbllearningunit::find(8);

         $tbllearningunit->delete();


   }
}



