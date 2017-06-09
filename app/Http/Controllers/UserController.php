<?php

namespace App\Http\Controllers;

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
		$user = tbluser::all();
		return view('contact')->with('user',$user);
	}

	public function delete($id)
	{

	}

	public function listGroup($groupId)
	{

	}
}
