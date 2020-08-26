<?php

namespace App\Http\Controllers;
use App\Project;
use App\Helpers\APIHelper;
use Illuminate\Http\Request;
use App\Http\Requests\CreateProjectRequest;
use App\Http\Requests\UpdateProjectRequest;

class ProjectController extends Controller
{

    public function project(){

    $projects = Project::where('status','!=','deactive')->orderby('status')->orderby('created_at','desc')->get();
        return view('frontend/page/project',["projects" => $projects]);
    }

    public function index(){

        $projects = Project::orderby('created_at','desc')->paginate(10);
        return view('backend.pages.projects.index',["projects" => $projects]);
    }

    public function create(){

        return view('backend.pages.projects.create');
    }

    public function store(CreateProjectRequest $request)
    {
        $project = new Project();
        $project->title = $request->input("title");
        $project->status = $request->input("status");
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
        return view('backend.pages.projects.edit', ["project" => $project]);
    }
    public function update(UpdateProjectRequest $request,$id)
    {
        $project = Project::find($id);
        $project->title = $request->input("title");
        $project->status = $request->input("status");
        $project->description = $request->input("description");
        if ($request->hasFile('image')) {
            if( $project->image_url){
                APIHelper::removeImage($project->image_url);
            }
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

