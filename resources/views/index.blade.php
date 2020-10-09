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
    <h6 id="hometext" class="font-weight-bold" {{$image->name}}  is a Developer 😊 😊</h6>
  </div>
</div>
@endif
@endforeach




@endsection