@extends('layout.app')


@section('content')
<h1>posts</h1>
@if(count($post)>0)
	@foreach($post as $posts)
	<div class="well">
		<h3><a href="/blog/public/posts/{{$posts->id}}">{{$posts->title}}</a></h3>
		<small>written on{{$posts->created_at}}</small>
	</div>
	@endforeach
	{{$post->links()}}
	@else
		<p>no post found</p>
	@endif
@endsection