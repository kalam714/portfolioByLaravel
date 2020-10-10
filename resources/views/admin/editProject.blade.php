@extends('layouts.app')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@section('content')
<h1>Update Project</h1>

{!! Form::open(['action' => ['\App\Http\Controllers\ProjectController@update',$project->id],'method'=>'POST', 'enctype'=>'multipart/form-data'])!!}
                  {{csrf_field()}}
                
                 
                    {{Form::label('', 'Project Title',['for'=>'cname'])}}
                    {{Form::text('title',$project->title,['class'=>'form-control'])}}
                  
                 
                    {{Form::label('', 'Project Description',['for'=>'cname'])}}
                    {{Form::textarea('description',$project->description,['class'=>'form-control'])}}
                 
                    {{Form::label('', 'Project Image',['for'=>'cname'])}}
                    {{Form::file('image',['class'=>'form-control'])}}

                    {{Form::label('', 'Project Url',['for'=>'cname'])}}
                    {{Form::text('url',$project->url,['class'=>'form-control'])}}
                    {{Form::hidden('_method','PUT')}}
    

                    {{Form::submit('save',['class'=>'btn btn-primary'])}}
   
                 {!! Form::close() !!}
</body>
</html>
@endsection