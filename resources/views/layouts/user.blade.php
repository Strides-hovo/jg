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
	<script src="{{asset('js/script.js')}}"></script>
	<!-- Chatra {literal} -->
	<script>
		(function(d, w, c) {
			w.ChatraID = 'MGor4ki6jr9DQoFbk';
			var s = d.createElement('script');
			w[c] = w[c] || function() {
				(w[c].q = w[c].q || []).push(arguments);
			};
			s.async = true;
			s.src = 'https://call.chatra.io/chatra.js';
			if (d.head) d.head.appendChild(s);
		})(document, window, 'Chatra');

	window.ChatraSetup = {
		colors: {
			buttonText: '#222222', /* цвет текста кнопки чата */
			buttonBg: '#FBED10'    /* цвет фона кнопки чата */
		}
	};

	</script>
	<!-- /Chatra {/literal} -->
</head>	
<body class="">
	<section>

		@include('user.saidbar')

		@include('user.header')

		@yield('content')
	</section>

	@yield('script')

</body>
</html>
<!-- tpl /footer -->