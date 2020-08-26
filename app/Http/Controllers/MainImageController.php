<?php

namespace App\Http\Controllers;

use App\MainImage;
use App\Helpers\APIHelper;
use Illuminate\Http\Request;
use App\Http\Requests\CreateMainImageRequest;

class MainImageController extends Controller
{
    public function mainImage(){

        return view('frontend/page/mainImage');
    }

    public function index(){

        $mainImages = MainImage::all();
        return view('backend.pages.mainImages.index',["mainImages" => $mainImages]);
    }
    public function create(){

        return view('backend.pages.mainImages.create');
    }

    public function store(CreateMainImageRequest $request)
    {
        $mainImage = new MainImage();
        $mainImage->description = $request->input("description");
        $mainImage->status = $request->input("status");
        if ($request->hasFile('image')) {

            $url = APIHelper::uploadFileToStorage($request->file('image'), 'public/common_media');
            $mainImage->image_url = $url;
        }

        $result = $mainImage->save();
        if ($result) {
            return redirect()->route('backend.mainImages.index')->with(session()->flash('success', 'mainImage Created!'));
        } else {
            return redirect()->route('backend.mainImages.index')->with(session()->flash('error', 'Something went wrong!'));
        }
    }
    public function edit($id)
    {
        $mainImage = MainImage::find($id);
        return view('backend.pages.mainImages.edit', ["mainImage" => $mainImage]);
    }
    public function update(Request $request,$id)
    {
        $mainImage = MainImage::find($id);
        $mainImage->description = $request->input("description");
        $mainImage->status = $request->input("status");
        if ($request->hasFile('image')) {
            if( $mainImage->image_url){
                APIHelper::removeImage($mainImage->image_url);
            }
            $url = APIHelper::uploadFileToStorage($request->file('image'), 'public/common_media');
            $mainImage->image_url = $url;
        }

        $result = $mainImage->save();
        if ($result) {
            return redirect()->route('backend.mainImages.index')->with(session()->flash('success', 'mainImage Updated!'));
        } else {
            return redirect()->route('backend.mainImages.index')->with(session()->flash('error', 'Something went wrong!'));
        }
    }
    public function destroy($id)
    {
        $result = MainImage::find($id);
        if( $result->image_url){
            APIHelper::removeImage($result->image_url);
        }
        $result->delete();
        if ($result) {
            return redirect()->route('backend.mainImages.index')->with(session()->flash('success', 'mainImage Deleted!'));
        } else {
            return redirect()->route('backend.mainImages.index')->with(session()->flash('error', 'Something went wrong!'));
        }
    }

}
