<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
class ClientController extends Controller
{
    public function index(){
        $images=Image::all();
        return view('index',compact('images'));
    }
}
