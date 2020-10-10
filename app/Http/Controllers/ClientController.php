<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use App\Models\Project;
use App\Models\Blog;
class ClientController extends Controller
{
    public function index(){
        $images=Image::all();
        $projects=Project::all();
        
        return view('index',compact('images','projects'));
    }
    public function blogIndex(){
        $blogs=Blog::all();
        return view('blog',compact('blogs'));
    }
    public function blogShow($id){
        $blog=Blog::find($id);
        return view('blogDetail',compact('blog'));
    }

}
