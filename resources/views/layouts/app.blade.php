<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" type="text/css" href="/css/app.css">
	@yield('css')
</head>
<body>
	<div class="container-full" id="app">
		@yield('content')
	</div>
</body>
<script src="/js/app.js"></script>
@yield('script')
</html>