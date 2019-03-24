@section('roles.header')
<!DOCTYPE html>
<html ng-app="app">
<head>
	<meta charset="utf-8">
	<title>Medical</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/estilos.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>


@show