<?php

namespace App\Http\Controllers;

class ProjectController extends Controller
{
	public function create()
	{
		return view('createproject');
	}

	public function read($id)
	{
		return view('project');
	}

	public function update($id)
	{
		return view('createproject');
	}

	public function delete($id)
	{

	}

	public function listProjects()
	{
		return view('projects');
	}
}