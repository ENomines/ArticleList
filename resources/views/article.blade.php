@extends('layout')

@section('content')
	<article>
		<h1>{{$article->title}}</h1>
		<img src="{{$article->image_path}}" width="400" class="main-img img-thumbnail" align="left"/>
		<div class="content">
			{!! htmlspecialchars_decode($article->full_text) !!}
		</div>
	</article>
@endsection