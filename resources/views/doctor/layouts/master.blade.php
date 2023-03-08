<!DOCTYPE html>
<html lang="en">
	<head>
		@include('doctor.layouts.head')
	</head>

	<body class="">
			   @include('doctor.layouts.main-header')
				@yield('content')
            	@include('doctor.layouts.footer')
				@include('doctor.layouts.footer-scripts')
	</body>
</html>
