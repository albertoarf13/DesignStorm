<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(){

        return view('pages/projects/index');
    }
    
    public function create(){

        return view('pages/projects/create');
    }

    public function show(){

        return view('pages/projects/show');
    }

    public function edit(){

        return view('pages/projects/edit');
    }

    public function update(){

        return "update project";
    }

    public function store(){

        return "store project";
    }

    public function destroy(){

        return "destroy project";
    }

}
