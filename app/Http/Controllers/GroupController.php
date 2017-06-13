<?php

namespace App\Http\Controllers;

class GroupController extends Controller
{
	public function create() 
	{
		return view('createGroup');
	}

	public function read($id) 
	{
		return view('group');
	}

	public function update($id) 
	{
		return view('createGroup');
	}

	public function delete($id)
	{

	}
}