<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;


class AccountController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){

        $numberOfProjects = Auth::user()->projects->count();

        return view('pages/dashboard', compact('numberOfProjects'));
    }

}
