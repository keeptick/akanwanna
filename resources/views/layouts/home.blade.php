<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 7/16/16
 * Time: 8:37 PM
 */
?>
<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>PullShopping</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by gettemplates.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
    <meta name="author" content="Ahmed">
	
	<!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FreeHTML5.co
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet"> -->
	<!-- <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i" rel="stylesheet"> -->
	
    @include("includes.head")

</head>
<body cz-shortcut-listen="true">
<div class="body">
@include("includes.header")
@yield("content")
@include("includes.footer")
</div>





<!-- jQuery Easing -->

<script src="{{url('')}}/booster/js/jquery-1.10.2.min.js"></script>


<!-- Magnific Popup -->
<script src="{{url('')}}/booster/js/jquery.magnific-popup.min.js"></script>

<script src="{{url('')}}/booster/js/main2.js"></script>

<!-- jQuery -->
	<script src="{{url('')}}/shop/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="{{url('')}}/shop/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="{{url('')}}/shop/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="{{url('')}}/shop/js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="{{url('')}}/shop/js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="{{url('')}}/shop/js/jquery.countTo.js"></script>
	<!-- Flexslider -->
	<script src="{{url('')}}/shop/js/jquery.flexslider-min.js"></script>
	<!-- Main -->
	<script src="{{url('')}}/shop/js/main.js"></script>





</body>
</html>