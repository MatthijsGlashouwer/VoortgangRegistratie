<?php

namespace App\Http\Controllers;

class ChecklistController extends Controller
{
	public function create() 
	{
		return view('createchecklist');
	}

	public function read($id) 
	{
		return view('checklist');
	}

	public function update($id) 
	{
		return view('createchecklist');
	}

	public function delete($id)
	{

	}
}