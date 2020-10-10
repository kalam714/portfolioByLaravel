<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload image</title>
</head>
<body>
<h1>Upload image</h1>

{!! Form::open(['action' => '\App\Http\Controllers\ImageController@store','method'=>'POST', 'enctype'=>'multipart/form-data'])!!}
                  {{csrf_field()}}
                
                 
                   {{Form::label('', 'Name',['for'=>'cname'])}}
                     {{Form::text('name','',['class'=>'form-control'])}}
                  
                 
                   
                 
                   {{Form::label('', 'Image',['for'=>'cname'])}}
                   {{Form::file('image',['class'=>'form-control'])}}
                   
    

                    {{Form::submit('save',['class'=>'btn btn-primary'])}}
   
                 {!! Form::close() !!}
                      
    <table  style="width:20%">
    <tr>
    <th>Name</th>
    <th>Image</th>
    <th>Status</th>
    <th>Action</th>
  </tr>
  @foreach($images as $image)
  <tr>
    <td>{{$image->name}}</td>
    <td>
   <img height="50" width="50" src="storage/images/{{$image->image}}">
    </td>
    <td>

    @if($image->status==0)
        <button>Active</button>
   
     @else
<button>UnActive</button>
</td>
 @endif

 <td>
  {!!Form::open(['action' => ['App\Http\Controllers\ImageController@destroy',$image->id],'method'=>'POST'])!!}
  {!!Form::hidden('_method','DELETE') !!}
  {{Form::submit('Delete')}}

{!!Form::close()!!}
</td>


  </tr>
  @endforeach

    </table>
</body>
</html>