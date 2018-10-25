@extends('layout')

@section('content')
	<div class="adminpanel">
		@if (isset($created) && $created)
			<div class="alert alert-success alert-dismissible">
				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				You have successfully added a new article.
			</div>
		@endif

		<form action={{url('admin')}} method="POST" enctype="multipart/form-data" class="form">
			{{csrf_field()}}
			<div class="form-group">
				<input type="text" placeholder="Title" name="title" class="form-control"/>
				<textarea id="editor" class="form-control" name="full_text"></textarea>
				<input type="file" name="image" class="form-control"/>
				<input type="submit" value="Save" class="btn btn-primary"/>
			</div>
		</form>
	</div>
@endsection

@section('footer')
		<script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/4.8.4/tinymce.min.js"></script>

		<script>
				tinymce.init({
					selector: "#editor",
					plugins: "image code",
 					toolbar: "bold italic underline undo redo alignleft aligncenter alignright removeformat bulllist numlist image code" 
				})
		</script>
@endsection