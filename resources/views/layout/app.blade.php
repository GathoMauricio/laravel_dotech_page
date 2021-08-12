<!DOCTYPE HTML>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
        <title>{{ env('APP_NAME') }}</title>
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Styles -->
		<link rel="stylesheet" href="{{ asset('hielo/css/main.css') }}" />
		<link rel="stylesheet" href="{{ asset('css/app.css') }}" />
        @livewireStyles
	</head>
	<body>
		<!-- Header -->
            @yield('header')
		<!-- Nav -->
            @yield('nav')
		<!-- Banner -->
			@yield('banner')
        <!-- Servicios -->
            @yield('servicios')
		<!-- nosotros -->
			@yield('nosotros')
		<!-- proyectos -->
			@yield('proyectos')
		<!-- Mapa -->
            @yield('mapa')
		<!-- Footer -->
			@yield('footer')

		<!-- Scripts -->
            <script src="{{ asset('hielo/js/jquery.min.js') }}"></script>
			<script src="{{ asset('hielo/js/jquery.scrollex.min.js') }}"></script>
			<script src="{{ asset('hielo/js/skel.min.js') }}"></script>
			<script src="{{ asset('hielo/js/util.js') }}"></script>
			<script src="{{ asset('hielo/js/main.js') }}"></script>
			<script src="{{ asset('js/app.js') }}"></script>
            @livewireScripts
	</body>
</html>