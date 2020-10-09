<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $projects=Project::all();
        return view('admin.project',compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title' =>'required',
            'url' => 'required',
            'description' => 'required',
            
            'image' =>'required',
          ]);

  
            $fileNameWithExt=$request->file('image')->getClientOriginalName();
            $fileName=pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            $extension=$request->file('image')->getClientOriginalExtension();
            $fileNameToStore=$fileName.'_'.time().'.'.$extension;
            $path=$request->file('image')->storeAS('public/project',$fileNameToStore);

        
       
        $project=new Project();
        $project->title=$request->input('title'); 
        $project->description=$request->input('description');
        $project->url=$request->input('url');
       
        $project->image=$fileNameToStore;
        $project->save();
        return redirect('/project');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project=Project::find($id);
        return view('admin.editProject',compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $this->validate($request,[
            'title' =>'required',
            'url' => 'required',
            'description' => 'required',
            
           
          ]);

  

        
       
        $project=Project::find($id);
        $project->title=$request->input('title'); 
        $project->description=$request->input('description');
        $project->url=$request->input('url');
        if($request->hasFile('image')){
            $fileNameWithExt=$request->file('image')->getClientOriginalName();
            $fileName=pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            $extension=$request->file('image')->getClientOriginalExtension();
            $fileNameToStore=$fileName.'_'.time().'.'.$extension;
            $path=$request->file('image')->storeAS('public/project',$fileNameToStore);
            $project->image=$fileNameToStore;

        }
       
        
        $project->update();
        return redirect('/project');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project=Project::find($id);
        $project->delete();
        return redirect('/project');
    }
}
