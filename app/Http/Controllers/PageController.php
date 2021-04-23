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

    public function searchPOST(Request $request){
        
        $searchTerm = $request->search;

        return redirect('search/'.$searchTerm);
    }

    public function search(Request $request, $search){

        $client = new Client();

        $res = $client->request('GET', "https://api.unsplash.com/search/photos", [
            "query"=>[
                "query" => $search,
                "client_id" => "km-H2RmtWiVYODHf2KdHO5a7b-Zohpui70Mah0EI2uo",
                "per_page" => 20
            ]
        ]);

        $posts = $res->getBody();
        $posts = json_decode($posts);
        $posts = $posts->results;

        $user = Auth::user();
        return view('pages/results', compact('user', 'posts', 'search'));
    }
}
