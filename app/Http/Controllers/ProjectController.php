<?php

namespace App\Http\Controllers;
use App\Project;
use App\Helpers\APIHelper;
use Illuminate\Http\Request;

class ProjectController extends Controller
{

    public function project(){

        return view('frontend/page/project');
    }

    public function index(){

        $projects = Project::all();
       // dd( $projects);
        return view('backend.pages.projects.index',["projects" => $projects]);
    }
    public function create(){

        return view('backend.pages.projects.create');
    }

    public function store(Request $request)
    {
        $project = new Project();
        $project->title = $request->input("title");
        $project->description = $request->input("description");
        if ($request->hasFile('image')) {

            $url = APIHelper::uploadFileToStorage($request->file('image'), 'public/common_media');
            $project->image_url = $url;
        }

        $result = $project->save();
        if ($result) {
            return redirect()->route('backend.projects.index')->with(session()->flash('success', 'Project Created!'));
        } else {
            return redirect()->route('backend.projects.index')->with(session()->flash('error', 'Something went wrong!'));
        }
    }
    public function edit($id)
    {
        $project = Project::find($id);
        //dd($project);
        return view('backend.pages.projects.edit', ["project" => $project]);
    }
    public function update(Request $request,$id)
    {
        $project = Project::find($id);
        $project->title = $request->input("title");
        $project->description = $request->input("description");
        if ($request->hasFile('image')) {
            APIHelper::removeImage($project->image_url);
            $url = APIHelper::uploadFileToStorage($request->file('image'), 'public/common_media');
            $project->image_url = $url;
        }

        $result = $project->save();
        if ($result) {
            return redirect()->route('backend.projects.index')->with(session()->flash('success', 'Project Updated!'));
        } else {
            return redirect()->route('backend.projects.index')->with(session()->flash('error', 'Something went wrong!'));
        }
    }
    public function destroy($id)
    {
        $result = Project::find($id);
        if( $result->image_url){
            APIHelper::removeImage($result->image_url);
        }
        $result->delete();
        if ($result) {
            return redirect()->route('backend.projects.index')->with(session()->flash('success', 'Project Deleted!'));
        } else {
            return redirect()->route('backend.projects.index')->with(session()->flash('error', 'Something went wrong!'));
        }
    }
}

