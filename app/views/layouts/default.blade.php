<!DOCTYPE html>
<html lang="en">
	<head>
		@include('includes.head')
		@yield('title')
	</head>

	<body>
	
		@include('includes.header')

		@yield('content')

		@include('includes.footer')

	</body>
</html>
