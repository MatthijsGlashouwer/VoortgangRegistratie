<?php

namespace App\Http\Controllers;

use App\tblproject;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Validator;

class ProjectController extends Controller
{
    public function view()
    {
        return Read('project.createproject');
    }

    public function Store(Request $request)
    {
        $rules = array(
            'Title' => 'required',
            'Description' =>  'required',
            'Status' =>     'required|digits_between:0,2',
            'startdate' => 'required',
            'enddate' => 'required|after:startdate',
            'deadline'=> 'after:startdate'
        );


        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return Redirect('project/create')->withInput()->withErrors($validator->messages());
        } else {
            $project = new tblproject();
            $project->Title = $request->Title;
            $project->Description = $request->Description;
            $project->StatusId = $request->Status;
            $project->StartDate = strtotime($request->startdate);
            $project->UpdateDate = 1;
            $project->UpdateUserId = 1;
            $project->EndDate = strtotime($request->enddate);
            $project->Deadline = strtotime($request->deadline);
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
        if ($id == -1 ) {return view('project.createproject'); }
        else {}
    }

    public function delete($id)
    {

    }

    public function listProjects()
    {
        $projects = tblproject::all();
        return view('project.projects', ['projects' => $projects]);
    }

}