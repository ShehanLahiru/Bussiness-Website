<?php

namespace App\Http\Controllers;

use App\Project;
use App\MainImage;
use App\ContactDetail;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){

        $mainImages = MainImage::where('status','active')->get();
        $projects = Project::where('status','main')->get();

        return view('frontend/page/home',["projects" => $projects,"mainImages" => $mainImages]);
    }
    public function index(){

        return view('backend/home');
    }
}
