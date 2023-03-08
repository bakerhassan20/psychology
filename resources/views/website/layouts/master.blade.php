<!DOCTYPE html>
<html lang="en">
	<head>
		@include('website.layouts.head')
	</head>

	<body class="">

			   @include('website.layouts.main-header')
				@yield('content')
            	@include('website.layouts.footer')
				@include('website.layouts.footer-scripts')
	</body>
</html>
