<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Isotope Filtering with Bootstrap 5 | @yield('title')</title>
  <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="Developer Zahid">
    <meta name="description" content="Demo of how to use Isotope js with Bootstrap">
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css'>
    <link rel="stylesheet" href="{{ asset('frontEndAssets') }}/style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<!-- /* Please ❤ this if you like it! 😊 */ -->

<!-- Portfolio Section Start -->
<section class="portfolio overflow-hidden">
	<div class="container">
		@include('frontEnd.include.header')
		<!-- Portfolio Cards Container -->
		@yield('content')
	</div>
</section>
<!-- Portfolio Section End -->
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js'></script>
<script src='https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js'></script>
<script  src="{{ asset('frontEndAssets') }}/script.js"></script>

</body>
</html>
