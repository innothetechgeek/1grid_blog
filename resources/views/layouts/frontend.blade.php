<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Katen - Minimal Blog & Magazine HTML Theme</title>
	<meta name="description" content="Katen - Minimal Blog & Magazine HTML Theme">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">

	<!-- STYLES -->
	<link rel="stylesheet" href="{{ asset('assets/frontend/css/bootstrap.min.css') }}" type="text/css" media="all">
	<link rel="stylesheet" href="{{ asset('assets/frontend/css/all.min.css') }}" type="text/css" media="all">
	<link rel="stylesheet" href="{{ asset('assets/frontend/css/slick.css') }}" type="text/css" media="all">
	<link rel="stylesheet" href="{{ asset('assets/frontend/css/simple-line-icons.css') }}" type="text/css" media="all">
	<link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css') }}" type="text/css" media="all">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">

	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
    <body>

    @yield('content')

	<!-- JAVA SCRIPTS -->
	<script src="{{ asset('assets/frontend/js/jquery.min.js') }} "></script>
	<script src="{{ asset('assets/frontend/js/popper.min.js') }}"></script>
	<script src="{{ asset('assets/frontend/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('assets/frontend/js/slick.min.js') }}"></script>
	<script src="{{ asset('assets/frontend/js/jquery.sticky-sidebar.min.js') }} "></script>
	<script src="{{ asset('assets/frontend/js/custom.js') }}"></script>
	@yield('scripts')
</body>
</html>