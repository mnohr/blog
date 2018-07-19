@extends('layout.app')


@section('content')
<a href="/blog/public/posts" class="btn btn-default">Go Back</a>
<h1>{{$post->title}}</h1>
<div>
	{{$post->body}}
</div>
<hr>
<small>written on {{$post->created_at}}</small>
@endsection