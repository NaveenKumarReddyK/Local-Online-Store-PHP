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
    <title>Clothes</title>
    <head>
        	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">	
        <link href="https://fonts.googleapis.com/css?family=Grand+Hotel|Libre+Baskerville|Lora|Roboto|Saira+Semi+Condensed|Ubuntu&display=swap" rel="stylesheet">
        <link rel="icon" href="clo-1.jpg" type="iamge/icon type">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <link rel="stylesheet" href="clothes.css">
        <!-- <script>
            $(document).ready(function(){
                $(".top-row-c1").hover(function(){
                    $(".t-row-c1-inside").slideUp("slow");
                    $(".t-row-c1-inside").css("opacity","1");
                    $(".t-row-c1-inside").css("visibility","visible");
                });
            });
            </script> -->
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
    </head>
    <body>
        <div class="top-intro">
            <div class="top-img">
                <img src="">
                <img src="">
                <img src="">
                <p><b></b></p>
            </div>
            <div class="top-info">
                <p><b>TEE MARKET</b></p>
            </div>
        </div>
        <div class="nav-top-container">
                <ul >
                        <li><a href="main-page.html" target="_blacnk">Home</a></li>
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
            <div class ="t-row">
                <div class="t-row-c1">
                    <img src="clo-1.jpg" id="i-1" >
                    <form method="post" action="c-1.php">
                    <div class="t-row-c1-inside">
                        <p><b>PRODUCT-1</b></p>
                        <p>Rs.250</p>
                        <button id="b-1">ADD TO CART</button>
                    </div>
                    </form>
                </div>
                <div class="t-row-c2">
                    <img src="clo-2.jpg">
                    <form method="post" action="c-2.php">
                <div class="t-row-c2-inside">
                    <p><b>PRODUCT-2</b></p>
                    <p>Rs.400</p>
                    <button id="b-2">ADD TO CART</button>
                </div>
                </form>
                </div>
                <div class="t-row-c3">
                    <img src="clo-3.jpg">
                    <form method="post" action="c-3.php">
                    <div class="t-row-c3-inside">
                        <p><b>PRODUCT-3</b></p>
                        <p>Rs.300</p>
                        <button id="b-3">ADD TO CART</button>
                    </div>
                </div>
                </form>
                <!-- <div class="t-row-c4"></div> -->
            </div>
            <div class ="t-row">
                    <div class="t-row-c4">
                        <img src="clo-4.jpg" id="i-4" >
                        <form method="post" action="c-4.php">
                        <div class="t-row-c4-inside">
                            <p><b>PRODUCT-4</b></p>
                            <p>Rs.799</p>
                            <button id="b-4">ADD TO CART</button>
                        </div>
                        </form>
                    </div>
                    <div class="t-row-c5">
                        <img src="clo-5.jpg">
                        <form method="post" action="c-5.php">
                    <div class="t-row-c5-inside">
                        <p><b>PRODUCT-5</b></p>
                        <p>Rs.499</p>
                        <button id="b-5">ADD TO CART</button>
                    </div>
                    </form>
                    </div>
                    <div class="t-row-c6">
                        <img src="clo-6.jpg">
                        <form method="post" action="c-6.php">
                        <div class="t-row-c6-inside">
                            <p><b>PRODUCT-6</b></p>
                            <p>Rs.999</p>
                            <button id="b-6">ADD TO CART</button>
                        </div>
                    </div>
                    </form>
                    <!-- <div class="t-row-c4"></div> -->
                </div>
                <footer>
                        <p><a href="getintouch.html" style="text-decoration: none;">Let us know each other</a><!---<span style="float:right">Follow</span>-->
                        <a href="https://www.facebook.com" target="_blank"><img src="facebook.png" title="Facebook"></a>
                        <a href="https://www.instagram.com" target="_blank"><img src="instagram.png" title="Instagram"></a>
                        <a href="https://twitter.com" target="_blank"><img src="twitter.png" title="twitter"></a></p>
                </footer>
    </body>
</html>