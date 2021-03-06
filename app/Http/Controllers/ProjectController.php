<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

use Illuminate\Support\Facades\Auth;



class ProjectController extends Controller
{
    public function index(Request $request){
        
        $projects = Auth::user()->projects;

        return view('pages/projects/index', compact('projects', 'request'));
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

    public function destroy(Request $request, $id){

        $project = Project::where('id', $id)->first();

        if($project->user_id != Auth::id())
            return redirect('/account/projects');


        $project->deleteRelated();


        if($request->session()->get('selected_project') == $id){
            $request->session()->forget('selected_project');
        }

        return redirect('/account/projects');
    }

    public function select(Request $request, $id){

        $request->session()->put('selected_project', $id);

        return redirect('/account/projects');


    }


    public function getAllProjects(){
        
        $projects = Auth::user()->projects;

        foreach($projects as $project){
            $project->numberOfImages = $project->images->count();
            
            unset($project->images);
        }

        return $projects;
    }

}
