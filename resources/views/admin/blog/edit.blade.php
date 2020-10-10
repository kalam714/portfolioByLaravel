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

{!! Form::open(['action' => ['\App\Http\Controllers\BlogController@update',$blog->id],'method'=>'POST', 'enctype'=>'multipart/form-data'])!!}
                  {{csrf_field()}}
                
                 
                    {{Form::label('', 'Project Title',['for'=>'cname'])}}
                    {{Form::text('title',$blog->title,['class'=>'form-control'])}}
                  
                 
                    {{Form::label('', 'Project Description',['for'=>'cname'])}}
                    {{Form::textarea('description',$blog->description,['class'=>'form-control'])}}
                 
                   
                    {{Form::hidden('_method','PUT')}}
    

                    {{Form::submit('save',['class'=>'btn btn-primary'])}}
   
                 {!! Form::close() !!}
</body>
</html>
@endsection