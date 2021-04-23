<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use GuzzleHttp\Client;

class PageController extends Controller
{
    
    public function index(){
        $user = Auth::user();
        return view('pages/index', compact('user'));
    }

    public function results(Request $request){

        $client = new Client();

        $res = $client->request('GET', "https://api.unsplash.com/search/photos", [
            "query"=>[
                "query" => $request->search,
                "client_id" => "km-H2RmtWiVYODHf2KdHO5a7b-Zohpui70Mah0EI2uo"
            ]
        ]);

        $posts = $res->getBody();
        $posts = json_decode($posts);
        $posts = $posts->results;

        //return $posts;

        $user = Auth::user();
        return view('pages/results', compact('user', 'posts'));
    }
}
