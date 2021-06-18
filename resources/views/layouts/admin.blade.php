<!DOCTYPE html>
<html>
<head>
	<meta content='initial-scale=1, width=device-width, user-scalable=no' name='viewport'>
	<meta name="keywords" content="">
	<meta name="description" content="">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	
	<link rel="preload" href="{{ asset('fonts/Roboto-Regular.woff') }}" as="font" crossorigin>
	<link rel="preload" href="{{ asset('fonts/Roboto-Medium.woff') }}" as="font" crossorigin>
	<link rel="preload" href="{{ asset('fonts/Roboto-Bold.woff') }}" as="font" crossorigin>
	<link rel="preload" href="{{ asset('fonts/Roboto-Black.woff') }}" as="font" crossorigin>
	
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/mediaqueries.css')}}">

	<title>@yield('title')</title>


</head>	
<body class="">
	<section>

		@include('admin.saidbar')

		@include('admin.header')
		@include('admin.messages')
		@yield('content')
	</section>

	@yield('script')
	<script src="{{asset('js/custom.js')}}"></script>
</body>
</html>
<!-- tpl /footer -->