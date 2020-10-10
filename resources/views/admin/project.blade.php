@extends('layouts.app')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalam's Portfolio</title>
</head>
<body>
@section('content')
<h1>Project Page</h1>

{!! Form::open(['action' => '\App\Http\Controllers\ProjectController@store','method'=>'POST', 'enctype'=>'multipart/form-data'])!!}
                  {{csrf_field()}}
                
                 
                    {{Form::label('', 'Project Title',['for'=>'cname'])}}
                    {{Form::text('title','',['class'=>'form-control'])}}
                  
                 
                    {{Form::label('', 'Project Description',['for'=>'cname'])}}
                    {{Form::textarea('description','',['class'=>'form-control'])}}
                 
                    {{Form::label('', 'Project Image',['for'=>'cname'])}}
                    {{Form::file('image',['class'=>'form-control'])}}

                    {{Form::label('', 'Project Url',['for'=>'cname'])}}
                    {{Form::text('url','',['class'=>'form-control'])}}
    

                    {{Form::submit('save',['class'=>'btn btn-primary'])}}
   
                 {!! Form::close() !!}

            <br><br>

                 <table  style="width:20%">
    <tr>
    <th>Title</th>
    <th>Description</th>
    <th>Image</th>
    
    <th>Action</th>
  </tr>
  @foreach($projects as $project)
  <tr>
    <td>{{$project->title}}</td><br>
    <td>{{$project->description}}</td><br>
    <td>
   <img height="50" width="50" src="storage/project/{{$project->image}}">
    </td><br>
   <td>
   <a href="/project/edit/{{$project->id}}">Edit</a>
   
  {!!Form::open(['action' => ['App\Http\Controllers\ProjectController@destroy',$project->id],'method'=>'POST'])!!}
  {!!Form::hidden('_method','DELETE') !!}
  {{Form::submit('Delete')}}

{!!Form::close()!!}
</td>

  @endforeach


</td>
</body>
</html>
@endsection