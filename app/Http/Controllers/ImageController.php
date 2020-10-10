<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
class ImageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $images=Image::all();
        return view('admin.image',compact('images'));
    }
    public function store(Request $request){
        $this->validate($request,[
            'name' =>'required',
            
            'image' =>'required',
          ]);

  
            $fileNameWithExt=$request->file('image')->getClientOriginalName();
            $fileName=pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            $extension=$request->file('image')->getClientOriginalExtension();
            $fileNameToStore=$fileName.'_'.time().'.'.$extension;
            $path=$request->file('image')->storeAS('public/images',$fileNameToStore);

        
       
        $image=new Image();
        $image->name=$request->input('name'); 
        $image->status=1;
       
        $image->image=$fileNameToStore;
        $image->save();
        return redirect('/upload');

    }
    public function destroy($id){
        $image=Image::find($id);
        $image->delete();
        return redirect('/upload');
    }
    public function active($id){
        $image=Image::find($id);
        $image->status=1;
        $image->update;
        return redirect('/upload');

    }
    public function unactive($id){
        $image=Image::find($id);
        $image->status=0;
        $image->update;
        return redirect('/upload');
    }
}
