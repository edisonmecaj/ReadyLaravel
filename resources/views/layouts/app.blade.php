<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">	
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="author" content="Edison Mecaj">
	<title>{{ config('app.name', 'Laravel') }}</title>
	<link rel="stylesheet" href="{{ asset('vendors/bootstrap3/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('vendors/fa5/css/fontawesome-all.min.css') }}">
	<link rel="stylesheet" href="{{ asset('vendors/flag-icons/css/flag-icon.min.css') }}">
	<script src="{{ asset('js/jquery.js') }}"></script>
	<script src="{{ asset('vendors/bootstrap3/js/bootstrap.min.js') }}"></script>
	@yield("styles")
	@yield("scripts")
	<link rel="stylesheet" href="{{ asset('css/custom.css') }}">
</head>
<body>
	@include('parts.navbar')	
	<div class="container">
		@isset($title)
		<div class="row">
			<div class="col-xs-12">
				<h3 class="page-title">{{$title}}</h3>
			</div>
		</div>
		@endisset
		@yield("content")
	</div>
	<script src="{{ asset('js/custom.js') }}"></script>
	@yield("script")
</body>
</html>