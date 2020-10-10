@extends('layouts.master')

@section('content')




@foreach($images as $image)
@if($image->status==1)

<div class="row justify-content-center my-3">
  <div class="col-5">
    <img src="storage/images/{{$image->image}}" class="img-fluid">
  </div>
</div>

<div class="row justify-content-center mb-3">
  <div class="col-md-9 text-center">
    <h6 id="hometext" class="font-weight-bold"> {{$image->name}}  is a Developer 😊 😊</h6>
  </div>
</div>
@endif
@endforeach

<h2 class="mt-5">Portfolio</h2>
<hr>
<div class="row">

@foreach($projects as $project)
  <div class="col-lg-4 col-md-6">

    <a href="{{ $project->url }}">
      <img src="storage/project/{{$project->image}}" class="img-fluid mb-2">
    </a>
  
  
    <h3>{{ $project->title }}</h3>
    <p>{{ $project->description }}</p>

  </div>
 @endforeach  
</div>



@endsection