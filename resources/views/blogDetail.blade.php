@extends('layouts.master')

@section('content')


<h1 class="text-center mt-5" id="blogdetailtitle">{{ $blog->title }}</h1>

<h5 class="text-center text-muted mb-5">Post Created : {{ $blog->created_at->diffForHumans()}}</h5>

{{ $blog->description }}

@endsection