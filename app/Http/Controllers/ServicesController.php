<?php

namespace App\Http\Controllers;

use App\Services;
use App\Helpers\APIHelper;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function services(){

        return view('frontend/page/project');
    }

    public function index(){

        $services = Services::all();
        return view('backend.pages.services.index',["services" => $services]);
    }
    public function create(){

        return view('backend.pages.services.create');
    }

    public function store(Request $request)
    {
        $service = new Services();
        $service->title = $request->input("title");
        $service->description = $request->input("description");
        if ($request->hasFile('image')) {

            $url = APIHelper::uploadFileToStorage($request->file('image'), 'public/common_media');
            $service->image_url = $url;
        }

        $result = $service->save();
        if ($result) {
            return redirect()->route('backend.services.index')->with(session()->flash('success', 'Services Created!'));
        } else {
            return redirect()->route('backend.services.index')->with(session()->flash('error', 'Something went wrong!'));
        }
    }
    public function edit($id)
    {
        $service = Services::find($id);
        return view('backend.pages.services.edit', ["service" => $service]);
    }
    public function update(Request $request,$id)
    {
        $service = Services::find($id);
        $service->title = $request->input("title");
        $service->description = $request->input("description");
        if ($request->hasFile('image')) {
            if( $service->image_url){
                APIHelper::removeImage($service->image_url);
            }
            $url = APIHelper::uploadFileToStorage($request->file('image'), 'public/common_media');
            $service->image_url = $url;
        }

        $result = $service->save();
        if ($result) {
            return redirect()->route('backend.services.index')->with(session()->flash('success', 'Service Updated!'));
        } else {
            return redirect()->route('backend.services.index')->with(session()->flash('error', 'Something went wrong!'));
        }
    }
    public function destroy($id)
    {
        $result = Services::find($id);
        if( $result->image_url){
            APIHelper::removeImage($result->image_url);
        }
        $result->delete();
        if ($result) {
            return redirect()->route('backend.services.index')->with(session()->flash('success', 'Service Deleted!'));
        } else {
            return redirect()->route('backend.services.index')->with(session()->flash('error', 'Something went wrong!'));
        }
    }
}
