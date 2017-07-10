<?php

namespace App\Http\Controllers;
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

	public function store(Request $request)
	{
		$rules = array(
			'Name' => 'required',
			'Student_Id' => 'required',
			'Crebo' => 'required',
			'Cohort' => 'required',
			'Role_User' => 'Required'
		);

		$validator = Validator::make($request->all(), $rules);
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
