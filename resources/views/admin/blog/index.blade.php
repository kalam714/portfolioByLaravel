@extends('layouts.app')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalam's Portfolio/title>
</head>
<body>
@section('content')
<h1>Blog Page</h1>
{!! Form::open(['action' => '\App\Http\Controllers\BlogController@store','method'=>'POST'])!!}
                  {{csrf_field()}}
                
                 
                    {{Form::label('', 'Post Title',['for'=>'cname'])}}
                    {{Form::text('title','',['class'=>'form-control'])}}
                  
                 
                    {{Form::label('', 'Post Description',['for'=>'cname'])}}
                    {{Form::textarea('description','',['class'=>'form-control'])}}
                 

                    {{Form::submit('save',['class'=>'btn btn-primary'])}}
   
                 {!! Form::close() !!}

            <br><br>


            <table  style="width:20%">
    <tr>
    <th>Title</th>
    <th>Description</th>
    <th>Action</th>
  </tr>
  @foreach($blogs as $blog)
  <tr>
    <td>{{$blog->title}}</td><br>
    <td>{{substr($blog->description, 0,  30)}}</td><br>
    <td>
    <a href="/blog/edit/{{$blog->id}}">Edit</a>
     
  {!!Form::open(['action' => ['App\Http\Controllers\BlogController@destroy',$blog->id],'method'=>'POST'])!!}
  {!!Form::hidden('_method','DELETE') !!}
  {{Form::submit('Delete')}}

{!!Form::close()!!}
</td>
    </td>
    @endforeach
</table>

    
</body>
</html>
@endsection