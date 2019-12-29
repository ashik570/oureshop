<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title> @yield('title', 'Laravel Ecommerce Project') </title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	@include('frontend.partials.styles')
</head>
<body>
	
<div class="wrapper">
	<!--Navbar-->
	@include('frontend.partials.nav')
	@include('frontend.partials.messages')
<!-- End Navbar Part -->


<!-- Start Sidebar + Content -->

@yield('content')

<!-- End Sidebar + Content -->

@include('frontend.partials.footer')

</div>


	@include('frontend.partials.scripts')
	@yield('scripts')
</body>
</html>























