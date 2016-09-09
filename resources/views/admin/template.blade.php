<!DOCTYPE html>
<html>
<head>
	<title>Tiendus | Administrador</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="{{ asset('admin/css/main.css') }}">
</head>
<body>
	@include('admin.partials.nav')
	@if (\Session::has('message'))
		@include('partials.message')
	@endif
	@yield('content')
	@include('admin.partials.footer')
	<script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/bootstrap.js') }}"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script src="{{ asset('admin/js/main.js') }}"></script>
	@yield('js')
</body>
</html>