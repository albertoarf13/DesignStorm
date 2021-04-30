<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

use Illuminate\Support\Facades\Auth;



class ProjectController extends Controller
{
    public function index(){
        
        $projects = Auth::user()->projects;

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

    public function update(Request $request, $id){

        $project = Project::where('id', $id)->first();
        $project->title = $request->title;
        $project->save();

        return redirect('/account/projects');
    }

    public function store(Request $request){

        if($request->title == NULL) return "Fail";
        
        $project = new Project;
        $project->title = $request->title;
        $project->user_id = Auth::id();
        $project->save();


        return redirect('/account/projects');
    }

    public function destroy($id){

        $project = Project::where('id', $id)->first();

        if($project->user_id != Auth::id())
            return redirect('/account/projects');


        $project->deleteRelated();

        return redirect('/account/projects');
    }

}
