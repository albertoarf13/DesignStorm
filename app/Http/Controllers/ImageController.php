<?php

namespace App\Http\Controllers;
use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function addImage(Request $request, $id){

        $data = [
            "image_url" => $request->url,
            "project_id" => 1,
            "image_info" => $id
        ];
        
        $image = image::create($data);

        return back();
    }
}
