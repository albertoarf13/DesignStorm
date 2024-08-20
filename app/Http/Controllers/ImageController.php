<?php

namespace App\Http\Controllers;
use App\Models\Image;
use App\Models\Project;
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


        // Check if the image is already in the project
        $project = Project::where('id', $request->session()->get('selected_project'))->first();

        $images_in_project = $project->images;

        foreach ($images_in_project as $image_in_project){

            if($image_in_project->image_url == $request->url){
                return back();
            }
        }
        

        $image = image::create($data);

        return back();
    }

    public function destroy(Request $request, $id){
        
        $image = Image::where('id', $id)->first();

        $image->delete();

        return back();
    }
}
