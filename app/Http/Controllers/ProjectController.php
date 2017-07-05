<?php

namespace App\Http\Controllers;

class ProjectController extends Controller
{
	public function create()
	{
		return view('project.createproject');
	}

	public function read($id)
	{
		return view('project.project');
	}

	public function update($id)
	{
		return view('project.createproject');
	}

	public function delete($id)
	{

	}

	public function listProjects()
	{
		return view('project.projects');
	}
}