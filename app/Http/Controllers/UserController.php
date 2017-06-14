<?php

namespace App\Http\Controllers;
use App\tblusergroup;
use App\tbluser;

class userController extends Controller
{
	public function create() 
	{

	}

	public function read($id) 
	{
		$tbluser = tbluser::find([0]);
		return view('contact.contact')->with('tbluser',$tbluser);
	}

	public function update($id) 
	{
		//$tbluser = tbluser::all();
		//return view('contact.contact')->with('tbluser',$tbluser);
		///return view('leereenheden.view')->with('tbllearningunit',$tbllearningunit);
	}

	public function delete($id)
	{

	}

	public function listGroup($groupId)
	{

	}
}
