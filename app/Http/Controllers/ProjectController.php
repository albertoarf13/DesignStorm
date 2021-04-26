<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(){

        return "show all projects";
    }
    
    public function create(){

        return "create project";
    }

    public function show(){

        return "show project";
    }

    public function edit(){

        return "edit project";
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
