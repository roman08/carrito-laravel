<!DOCTYPE html>
<html>
<head>
	<title>Tiendus | Laravel</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
</head>
<body>
	
	@include('partials.nav')
	@if (\Session::has('message'))
		@include('partials.message')
	@endif
	@yield('content')
	@include('partials.footer')
	<script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/bootstrap.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/pinterest_grid.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
	@yield('js')
</body>
</html>