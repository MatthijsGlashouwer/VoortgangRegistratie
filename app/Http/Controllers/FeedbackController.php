<?php

namespace App\Http\Controllers;

class FeedbackController extends Controller
{
	public function create()
	{
		return view('createfeedback');
	}

	public function read($id)
	{
		return view('feedback');
	}

	public function update($id)
	{
		return view('createfeedback');
	}

	public function delete($id)
	{

	}

	public function listProjects()
	{
		return view('');
	}
}