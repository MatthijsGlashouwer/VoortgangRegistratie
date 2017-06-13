<?php

namespace App\Http\Controllers;

use App\tblluser;

class userController extends Controller
{
	public function create() 
	{

	}

	public function read($id) 
	{
		return view('contact')->with('name','Sander van Veenen');
	}

	public function update($id) 
	{
		$tbluser = tbluser::all();
		return view('contact')->with('tbluser',$tbluser);
		///return view('leereenheden.view')->with('tbllearningunit',$tbllearningunit);
	}

	public function delete($id)
	{

	}

	public function listGroup($groupId)
	{

	}
}
