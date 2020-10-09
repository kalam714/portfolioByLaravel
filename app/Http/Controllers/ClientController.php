<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use App\Models\Project;
class ClientController extends Controller
{
    public function index(){
        $images=Image::all();
        $projects=Project::all();
        
        return view('index',compact('images','projects'));
    }

}
