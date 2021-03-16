<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Homecrs;
use App\Models\Member;
use App\Models\Service;

class HomeController extends Controller
{
    public function index(){
        return view('index', ['posts' => Post::index(),'homecrs' => Homecrs::index()]);
    }

    public function company(){
        return view('company', ['members' => Member::index()]);
    }

    public function services(){
        return view('services',['services' => Service::index()]);
    }

    public function contact(){
        return view('contact');
    }
}
