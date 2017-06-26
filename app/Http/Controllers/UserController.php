<?php

namespace App\Http\Controllers;
use App\tblusergroup;
use App\tbluser;

class userController extends Controller
{
	public function read($id) 
	{
		$tbluser = tbluser::Find([$id]);
		return view('contact.contact')->with('tbluser',$tbluser);
	}

	public function update($id = -1) 
	{
		if ($id == -1) { // If id is -1 create a new contact
			return view('contact.contactcreate');
		} else { // Edit existing contact
			$tbluser = tbluser::Find([$id]);
			return view('contact.contactupdate')->with('tbluser',$tbluser);
		}
		
	}

	public function delete($id)
	{

	}

	public function listGroup($groupId)
	{

	}
}
