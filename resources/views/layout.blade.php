<!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
		<link rel="stylesheet" href="/css/app.css"/>
	</head>

	<body>
		<div class="container">
			<div class="header">
				<a href="{{url('/')}}" class="btn btn-success">Articles</a>
				<a href="{{url('admin')}}" class="btn btn-success">Admin</a>
			</div>

			@yield('content')
		</div>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>

		@yield('footer')
	</body>
</html>