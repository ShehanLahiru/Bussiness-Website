<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){

        return view('frontend/page/home');
    }
    public function index(){

        return view('backend/home');
    }
}
