<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index(){
        
        $projects = Project::all();

        return view('pages/projects/index', compact('projects'));
    }
    
    public function create(){

        return view('pages/projects/create');
    }

    public function show(Request $request, $id){

        $project = Project::where('id', $id)->first();

        return view('pages/projects/show', compact('project'));
    }

    public function edit(Request $request, $id){
        
        $project = Project::where('id', $id)->first();

        return view('pages/projects/edit', compact('project'));
    }

    public function update(){

        return "update project";
    }

    public function store(Request $request){

        if($request->title == NULL) return "Fail";
        
        $project = new Project;
        $project->title = $request->title;
        $project->save();

        return redirect('/account/projects');
    }

    public function destroy(){

        return "destroy project";
    }

}
