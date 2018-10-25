@extends('layout')

@section('content')
	<div class="articles">
		@foreach ($articles as $article)
			<div class="row article">
				<div class="col-md-3">
					<img src="{{$article->image_path}}" width="100%" class="img-thumbnail"/>
				</div>
			
				<div class="col-md-9">
					<h2>{{$article->title}}</h2>
					<div class="intro-description">{{ strip_tags($article->intro_text) }} ...</div>
					<a href="{{url('article').'/'.$article->id}}" class="more-btn btn btn-primary">Read more</a>
				</div>
			</div>
		@endforeach
	</div>
@endsection