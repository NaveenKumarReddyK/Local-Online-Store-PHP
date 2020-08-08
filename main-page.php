<?php
session_start();
if(!isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == false)
{
    header("location:login.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
	<title >Local online store</title>
	<link rel="stylesheet" type="text/css" href="main-page.css">
	<link href="https://fonts.googleapis.com/css?family=Butcherman|Open+Sans|Roboto+Slab&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Mansalva|Merriweather|Open+Sans&display=swap" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<link rel="icon" href="LOC-logo.png" type="image/icon type">
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">	
</head>
<body>
		<script>
				$(document).ready(function() {
				   var stickNavTop = $('.nav-top-container').offset().top;
				   var stickNav = function(){
					var scrollTop = $(window).scrollTop();
					if (scrollTop > stickNavTop) { 
						$('.nav-top-container').addClass('stick');
					} else {
						$('.nav-top-container').removeClass('stick'); 
					}
				};
				stickNav();
				$(window).scroll(function() {
					stickNav();
				});
			});
				</script>
		<div class="h1">
				<h1 ><img src="LOC-logo.png" alt="LOC-logo" ><a href="main-page.html"></a></h1>
			</div>

	<div class="nav-top-container">
            <ul >
                    <li><a href="main-page.html">Home</a></li>
                    <li class="dropdown"><a href="#" href="javascript:void(0)" class="dropdown-a">Categories</a>
                        <div class="drop-content">
                        <a href="clothes.php" target="_blank">Clothes</a>
                        <a href="cycle.php" target="_blank">Cycle</a>
						<a href="books.php" target="_blank">Books</a>
                        </div>
                    </li>
                    <li><a href="cart.php" target="_blank">Cart</a></li>
                    <li><a href="getintouch.html">Contact</a></li>
                    <li><a href="logout.php">Logout</a></li>
                    <li><a href="signup.php">Signup</a></li>
                    <li style="float:right"><a href="aboutme.html" target="_blank">About</a></li>
        </div>
	<div id="container-a1">
	<div id="container-top">
		<div id="i1">
		<img class="fill-top" src="main-page-clotehs.jpg" alt="tee's"></div>
		<div id="container-top-data">
			<h2>Clothing</h2>
				<a href="clothes.php" title="Clothing" target="_blank">Style away from a click</a>
		</div>
	</div>
</div>
<div class="container-a2">
	<div class="container-middle-left">
		<img class="fill-m-l" src="main-page-cycle.jpg" alt="cycles">
		<div id="container-middle-left-data">
			<p><b>Cycles</b></p><br>
			<a href="cycle.php" title="Cycles" target="_blank">Give your legs some movement</a>
			</div>
	</div>
	<div class="container-middle-right">
		<img class="fill-m-r" src="main-page-books.jpg" alt="books">
		<div id="container-middle-right-data">
			<p><b>Books</b></p>
			<a href="books.php" title="Books" target="_blank">Start Reading</a>
		</div>
	</div>
</div>
	<div class="container-bottom">
		<img class="fill-b" src="main-page-stationery.jpg" alt="statoinery">
		<div id="container-bottom-data">
			<!-- <p>Stationery</p> -->
			<a href="#" title="Stationery" target="_blank">Stationery</a>
			<!-- <a href="#" title="Study">Study</a> -->
		</div>
	</div>
	<footer>
            <p><a href="getintouch.html" target="_blank" style="text-decoration: none;">Let us know each other</a><!---<span style="float:right">Follow</span>-->
            <a href="https://www.facebook.com" target="_blank"><img src="facebook.png" title="Facebook"></a>
            <a href="https://www.instagram.com" target="_blank"><img src="instagram.png" title="Instagram"></a>
            <a href="https://twitter.com" target="_blank"><img src="twitter.png" title="twitter"></a></p>
	</footer>
</body>
</html>