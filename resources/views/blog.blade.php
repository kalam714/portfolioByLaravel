@extends('layouts.master')

@section('content')


<h1 id="blogtitle" class="font-weight-bold text-center">Blog</h1>

<h3 class="text-center mb-5">Kalam has written {{ $blogs->count() }} Posts </h3>

@foreach($blogs as $blog)
<div class="row justify-content-center my-3">
  <div class="col-md-10">
    <a href="/blog/{{$blog->id}}">
      <h2>{{ $blog->title }}</h2>
    </a>
    <h6 class="text-muted">Post Created : {{$blog->created_at->diffForHumans() }}</h6>
    <h4>{{substr($blog->description, 0,30)}}....</h4>
  </div>
</div>
@endforeach
@endsection