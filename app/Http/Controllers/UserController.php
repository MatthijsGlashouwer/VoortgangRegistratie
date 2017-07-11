<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;

use Validator;

use app\tblgroup;
use App\tblusergroup;
use App\tbluser;

class userController extends Controller
{
	public function read($id) 
	{
		$users = tbluser::Find([$id]);
		//dd($users[0]->user_id);
		return view('contact.contact')->with('users',$users);
	}

	public function update($id = -1) 
	{
		if ($id == -1) { // If id is -1 create a new contact
			return view('contact.contactcreate');
		} else { // Edit existing contact
			$users = tbluser::Find([$id]);
			return view('contact.contactupdate')->with('users',$users);
		}
		
	}

	public function create(Request $request)
	{
		$rules = array(
			'Name' 			=> 'required|alpha',
			'Email' 		=> 'email',
			'Phone' 		=> 'digits:10',
			'Student_Id' 	=> 'required|numeric',
			'Crebo' 		=> 'required|digits:4',
			'Cohort' 		=> 'required|digits:4',
		);

		$messages = array(
			'Name.required'			=> 'Naam is verplicht',
			'Name.alpha'			=> 'Naam mag alleen uit letters bestaan',

			'Email.email'			=> 'Geen geldig email adres',

			'Phone.digits'			=> 'Geen geldig telefoon nummer',

			'Student_Id.required'	=> 'Student nummer is verplicht',
			'Student_Id.numeric'	=> 'Student nummer kan alleen uit nummers bestaan',

			'Crebo.required'		=> 'Crebo is verplicht',

			'Cohort.required'		=> 'Cohort is verplicht',
		);

		$validator = Validator::make($request->all(), $rules, $messages);

		if($validator->fails()) {
			return Redirect('/contact/update/-1')->withInput()->withErrors($validator->messages());
		} else {
			/*
			if ($id == -1){
				$tbluser = new tbluser;
			} else {
				$tbluser = tbluser::find([$id]);
			}
			*/
			$tbluser = new tbluser;
			$tbluser->Name = $request->Name;
			$tbluser->Email = $request->Email;
			$tbluser->Phone = $request->Phone;
			$tbluser->Student_Id = $request->Student_Id;
			$tbluser->Crebo = $request->Crebo;
			$tbluser->Cohort = $request->Cohort;
			$tbluser->save();
			if($tbluser->save()){
				return Redirect('/contact/view/1');
			}
		}
	}

	public function delete($id)
	{

	}

	//public function list(){
	//	$users = tbluser::all();
	//}

	public function listGroup($groupId)
	{
		$users = tblusergroup::where('group_id','=',$groupid)->get();
		
		//$group = tbluser::find([$users]);
	}
}
