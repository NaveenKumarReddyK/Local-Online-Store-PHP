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
	<title >Books</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">	
    <link rel="stylesheet" type="text/css" href="books.css">
    <link href="https://fonts.googleapis.com/css?family=Livvic:600|Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Chilanka|Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Grenze|Lora|Acme&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="icon" href="main-page-books.jpg" type="image/icon type">	
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
                        <a href="clothes.html" target="_blank">Clothes</a>
                        <a href="cycle.html" target="_blank">Cycle</a>
                        <a href="#" target="_blank">Stationery</a>
                        <a href="books.html" target="_blank">Books</a>
                        </div>
                    </li>
                    <li><a href="cart.php" target="_blank">Cart</a></li>
                    <li><a href="getintouch.html">Contact</a></li>
                    <li><a href="logout.php">Logout</a></li>
                    <li><a href="signup.php">Signup</a></li>
                    <li style="float:right" ><a href="aboutme.html" target="_blank">About</a></li>
        </div>
    <!-- Add fade in technique-->
    <div class="books-intro">
      <div class="books-intro-content">
      <p><b>A SOFA </b><br><b>A GOOD BOOK</b><br><b>AND YOU</b></p></div>
    </div>
    <div class="books-second-intro">
    <p><b>WE GOT YOU BEST IN THE PUBLISHERS</b></p>
    </div>
    <div class="books-categories">
      <div class="a">
          <a href="#cbc"><img src="spidy.png" alt="Spidy" title="spidy" style="height:350px "></a>
    <p><b>CHILDREN'S BOOKS</b></p>
        </div>
    <div class="b">
        <a href="#ebc"><img src="education.jpg" alt="Spidy" title="spidy" style="height:350px "></a>
        <p><b>EDUCATION</b></p>
      </div>
        <div class="c">
      <a href="#"><img src="novel.jpg" alt="Spidy" title="spidy" style="height:350px "></a>
      <p><b>NOVEL</b></p>
        </div>
      <div class="d">
    <a href="#"><img src="history.jpg" alt="Spidy" title="spidy" style="height:350px "></a>
    <p><b>HISTORY</b></p>  
  </div>
    </div></a>
    <!----<div class="book-shelf">
        <ul>
          <li><a href="#">EDUCATION</a></li>
          <li><a href="#">CHILDREN'S BOOKS</a></li>
          <li><a href="#">HISTORY</a></li>
          <li><a href="#">NOVEL</a></li>
        </ul>
      </div>-->
      <a name="cbc">
      <div class="child-books-container">
        <div class="child-books-intro">
          <p>“We all can dance,” he said, “if we find the music that we love.”</p>
        </div>
        <div class="child-books">
          <a href="child-book1-info.php"><img src="child-book-1.jpg" alt="cb-1" height="400px" width="300px"></a>
          <p>Panchatantra</p>
        </div>
        <div class="child-books">
          <a href="child-book2-info.php"><img src="child-book-2.jpg" alt="cb-2" height="400px" width="300px"></a>
          <p>Tenali Raman</p>
        </div>
        <div class="child-books">
          <a href="child-book3-info.php"><img src="child-book-3.jpg" alt="cb-3" height="400px" width="300px"></a>
          <p>Akbar and Birbal</p>
        </div>
        <div class="child-books">
          <a href="child-book4-info.php"><img src="child-book-4.jpg" alt="cb-4" height="400px" width="300px"></a>
          <p>Enchanted</p>
        </div>
      </div></a>
      <a name="ebc">
      <div class="edu-books-container">
          <div class="edu-books-intro">
            <p>“You can never be overdressed or overeducated.” </p>
          </div>
          <div class="edu-books">
            <a href="edu-book1-info.php"><img src="edu-book-1.jpg" alt="cb-1" height="400px" width="300px"></a>
            <p> Physics</p>
          </div>
          <div class="edu-books">
            <a href="edu-book2-info.php"><img src="edu-book-2.jpg" alt="cb-2" height="400px" width="300px"></a>
            <p>IMO Physics</p>
          </div>
          <div class="edu-books">
            <a href="edu-book3-info.php"><img src="edu-book-3.jpg" alt="cb-3" height="400px" width="300px"></a>
            <p>Physics XII</p>
          </div>
          <div class="child-books">
            <a href="edu-book4-info.php"><img src="edu-book-4.jpg" alt="cb-4" height="400px" width="300px"></a>
            <p>NCO Olympiad</p>
          </div>
        </div></a>
      <footer>
            <p ><a href="getintouch.html" style="text-decoration: none;">Let us know each other</a><!---<span style="float:right">Follow</span>-->
            <a href="https://www.facebook.com" target="_blank"><img src="facebook.png" title="Facebook"></a>
            <a href="https://www.instagram.com" target="_blank"><img src="instagram.png" title="Instagram"></a>
            <a href="https://twitter.com" target="_blank"><img src="twitter.png" title="twitter"></a></p>
            </footer>
        </body>
        </html>
