<?php

namespace App\Http\Controllers;
use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function addImage(Request $request, $id){

        if($request->session()->get('selected_project') == NULL)
            return redirect('/account/projects');

        $data = [
            "image_url" => $request->url,
            "project_id" => $request->session()->get('selected_project'),
            "image_info" => $id
        ];
        
        $image = image::create($data);

        return back();
    }

    public function destroy(Request $request, $id){
        
        $image = Image::where('id', $id)->first();

        $image->delete();

        return back();
    }
}
