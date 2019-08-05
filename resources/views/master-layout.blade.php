<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>@yield('title')</title>
	{{-- <link rel="icon" href="images/mini-logo.png"> --}}
	<base href="{{ asset('') }}">


	{{-- FRAMEWORK CSS --}}
	<link rel="stylesheet" type="text/css" href="libs/bootstrap-4.3.1-dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="libs/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="libs/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css">
	<link rel="stylesheet" type="text/css" href="libs/WOW-master/css/libs/animate.css">
	{{-- CSS --}}
	<link rel="stylesheet" type="text/css" href="css/index.css">
	

	{{-- FRAMEWORK JS --}}
	<script type="text/javascript" src="libs/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="libs/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="libs/OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>
	<script src="https://kit.fontawesome.com/40e36cd30a.js"></script>
	<script type="text/javascript" src="libs/WOW-master/dist/wow.min.js"></script>
	{{-- <script type="text/javascript" src="libs/angular.min.js"></script> --}}
	{{-- JS --}}
	<script type="text/javascript" src="js/index.js"></script>

	
</head>
<body>
@include('header')
@yield('content')
@include('footer')

<div class="go-top rounded-circle">
	<i class="far fa-hand-pointer"></i>
</div>
<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      xfbml            : true,
      version          : 'v4.0'
    });
  };

  (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- Your customer chat code -->
<div class="fb-customerchat"
  attribution=setup_tool
  page_id="110172446993829">
</div>
</body>
</html>