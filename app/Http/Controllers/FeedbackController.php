<?php

namespace App\Http\Controllers;

class FeedbackController extends Controller
{
	public function create()
	{
		return view('feedback.feedbackcreate');
	}

	public function read($id)
	{
		return view('feedback.feedback');
	}

	public function update($id)
	{
		return view('feedback.feedbackcreate');
	}

	public function delete($id)
	{

	}

	public function listProjects()
	{
		return view('');
	}
}