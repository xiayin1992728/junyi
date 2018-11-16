<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0" />
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="stylesheet" type="text/css" href="/css/app.css">
	<link rel="stylesheet" type="text/css" href="/css/menu.css">
	@yield('css')
</head>
<body>
	<div class="container-full" id="app">
		@yield('content')
	</div>
	@include('layouts._menu')
</body>
<script src="/js/app.js"></script>
<script type="text/javascript">

</script>
@yield('script')
</html>