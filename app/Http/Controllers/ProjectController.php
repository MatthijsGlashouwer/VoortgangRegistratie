<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\tblproject;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Validator;

class ProjectController extends Controller
{
    public function view()
    {
        return view('project.createproject');
    }

    public function Create(Request $request)
    {
        $rules = array(
            'Title' => 'required',
            'Description' =>  'required'
        );


        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return Redirect('project/create')->withInput()->withErrors($validator->messages());
        } else {
            $project = new tblproject();
            $project->Title = $request->Title;
            $project->Description = $request->Description;
            $project->Status_Id = 1;
            $project->Startdate = 1;
            $project->Updatedate = 1;
            $project->Updateuser_Id = 1;
            $project->Enddate = 1;
            $project->Deadline = 1;
            if($project->save()){
                return Redirect('project')->withMessage($project->Title . " is toegevoegd.");
            }
        }
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
        $projects = tblproject::all();
        return view('project.projects', ['projects' => $projects]);
    }
=======
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
>>>>>>> origin/master
}