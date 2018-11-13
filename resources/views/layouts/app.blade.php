<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	@yield('css')
</head>
<body>
	<div class="container">
		@yield('content')
	</div>
</body>
<script src="/js/app.js"></script>
@yield('script')
</html>