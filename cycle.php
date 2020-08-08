<!-- create three conts and then add name them as moderns , vintage,evergreen -->
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
    <title>
        Cycle Store
    </title>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">	
        <link rel="stylesheet" href="cycle.css">
        <link href="https://fonts.googleapis.com/css?family=Anton&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Turret+Road&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
        <link rel="icon" href="cycle1.jpg" type="image/icon type">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
     
    </head>
    <body>
            <script>
                    // var oly = document.getElementsByClassName("oly-container");
                    // var x = document.getElementsById("x");
                    // var vi = document.getElementsById("vi1");
                    
                    // vi.onclick = function(){
                    //     oly.style.display = "block";
                    // }
                    // x.onclick = function(){
                    //     oly.style.display = "none";
                    // }
                    $(document).ready(function(){
                        $("#vi1").click(function(){
                            $(".oly-cv1,.oly-v1").css("visibility","visible");
                        });
                        $("#x1").click(function(){
                            $(".oly-cv1,.oly-v1").css("visibility","hidden");
                        });
                        $("#vi2").click(function(){
                            $(".oly-cv2,.oly-v2").css("visibility","visible");
                        });
                        $("#x2").click(function(){
                            $(".oly-cv2,.oly-v2").css("visibility","hidden");
                        });
                        $("#vi3").click(function(){
                            $(".oly-cv3,.oly-v3").css("visibility","visible");
                        });
                        $("#x3").click(function(){
                            $(".oly-cv3,.oly-v3").css("visibility","hidden");
                        });
                        $("#si1").click(function(){
                            $(".oly-cs1,.oly-s1").css("visibility","visible");
                        });
                        $("#x4").click(function(){
                            $(".oly-cs1,.oly-s1").css("visibility","hidden");
                        });
                        $("#si2").click(function(){
                            $(".oly-cs2,.oly-s2").css("visibility","visible");
                        });
                        $("#x5").click(function(){
                            $(".oly-cs2,.oly-s2").css("visibility","hidden");
                        });
                        $("#si3").click(function(){
                            $(".oly-cs3,.oly-s3").css("visibility","visible");
                        });
                        $("#x6").click(function(){
                            $(".oly-cs3,.oly-s3").css("visibility","hidden");
                        });
                        $("#ni1").click(function(){
                            $(".oly-cn1,.oly-n1").css("visibility","visible");
                        });
                        $("#x7").click(function(){
                            $(".oly-cn1,.oly-n1").css("visibility","hidden");
                        });
                        $("#ni2").click(function(){
                            $(".oly-cn2,.oly-n2").css("visibility","visible");
                        });
                        $("#x8").click(function(){
                            $(".oly-cn2,.oly-n2").css("visibility","hidden");
                        });
                        $("#ni3").click(function(){
                            $(".oly-cn3,.oly-n3").css("visibility","visible");
                        });
                        $("#x9").click(function(){
                            $(".oly-cn3,.oly-n3").css("visibility","hidden");
                        });

                    });
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

        <div class="cy-intro">
            <div class="cy-intro-img">
                <img src="cycle1.jpg" alt="cycle">
                <div class="cy-intro-data">
                    <p>Cycle Store</p>
                    
                </div>
            </div>
        </div>
        <div class="nav-top-container">
                <ul >
                        <li><a href="main-page.php" target="_blacnk">Home</a></li>
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
                        <li style="float:right" ><a href="aboutme.html" target="_blank">About</a></li>
            </div>
        <div class="sec-div">
            <div class="sec-div-intro"><p>COLLECTIONS</p></div>
            <div class="s-f-div">
                <a href="#vintage" ><img src="vintage.png"></a>
            </div>
            <div class="s-s-div">
                <a href="#standard"><img src="90scycles.png"></a>
            </div>
            <div class="s-t-div">
                <a href="#new"><img src="newcycles.png"></a>
            </div>
        </div>
        <a name="vintage">
        <div class="vintage">
            <div class="v-intro"><p>VINTAGE BIKES</p></div>
            <div class="v-info">
                <div class="v-info-f">
                    <img id="vi1" src="cycle1.jpg">
                </div>
                <div class="v-info-s">
                    <img id="vi2"src="cycle2.jpg">
                </div>
                <div class="v-info-t">
                    <img id="vi3"src="cycle3.jpg">
                </div>
            </div>
        </div>
        </a>
        <a name="standard">
        <div class="standard">
                <div class="s-intro"><p>STANDARD BIKES</p></div>
                <div class="s-info">
                    <div class="s-info-f">
                        <img id="si1" src="cycle4.jpg">
                    </div>
                    <div class="s-info-s">
                            <img id="si2" src="cycle5.jpg">
                    </div>
                    <div class="s-info-t">
                            <img id="si3" src="cycle6.jpg">
                    </div>
                </div>
            </div>
            </a>
            <a name="new">
            <div class="new">
                    <div class="n-intro"><p>NEW BIKES</p></div>
                    <div class="n-info">
                        <div class="n-info-f">
                                <img id="ni1" src="cycle7.jpg">
                        </div>
                        <div class="n-info-s">
                                <img id="ni2" src="cycle1.jpg">
                        </div>
                        <div class="n-info-t">
                                <img id="ni3" src="cycle2.jpg">
                        </div>
                    </div>
                </div>
            </a>
            <div class="oly-cv1">
                <div class="oly-v1">
                    <div class="oly-img">
                        <img src="cycle1.jpg">
                    </div>
                    <form method="post" action="cv1.php">
                    <div class="oly-info-v1">
                        <p>VINT23111</p>
                        <p>Rs.2280.00</p>
                        <button id="oly-bv1">BUY</button>
                    </div>
                    </form>
                    <p id="x1">&times</p>
                </div>
            </div>
            <div class="oly-cv2">
                    <div class="oly-v2">
                        <div class="oly-img">
                            <img src="cycle2.jpg">
                        </div>
                        <form method="post" action="cv2.php">
                        <div class="oly-info-v2">
                            <p>VINT24334</p>
                            <p>Rs.3899.00</p>
                            <button id="oly-bv2">BUY</button>
                        </div>
                        </form>
                        <p id="x2">&times</p>
                    </div>
                </div>
                <div class="oly-cv3">
                        <div class="oly-v3">
                            <div class="oly-img">
                                <img src="cycle3.jpg">
                            </div>
                            <form method="post" action="cv3.php">
                            <div class="oly-info-v3">
                                <p>VINT21231</p>
                                <p>Rs.4599.00</p>
                                <button id="oly-bv3">BUY</button>
                            </div>
                            </form>
                            <p id="x3">&times</p>
                        </div>
                    </div>
                    <div class="oly-cs1">
                            <div class="oly-s1">
                                <div class="oly-img">
                                    <img src="cycle4.jpg">
                                </div>
                                <form method="post" action="cs1.php">
                                <div class="oly-info-s1">
                                    <p>STAND23423</p>
                                    <p>Rs.12999.00</p>
                                    <button id="oly-bs1">BUY</button>
                                </div>
                                </form>
                                <p id="x4">&times</p>
                            </div>
                        </div>
                        <div class="oly-cs2">
                                <div class="oly-s2">
                                    <div class="oly-img">
                                        <img src="cycle5.jpg">
                                    </div>
                                    <form method="post" action="cs1.php">
                                    <div class="oly-info-s2">
                                        <p>STAND23422</p>
                                        <p>Rs.12599.00</p>
                                        <button id="oly-bs2">BUY</button>
                                    </div>
                                    </form>
                                    <p id="x5">&times</p>
                                </div>
                            </div>
                            <div class="oly-cs3">
                                    <div class="oly-s3">
                                        <div class="oly-img">
                                            <img src="cycle6.jpg">
                                        </div>
                                        <form method="post" action="cs1.php">
                                        <div class="oly-info-s3">
                                            <p>STAND23429</p>
                                            <p>Rs.30000.00</p>
                                            <button id="oly-bs3">BUY</button>
                                        </div>
                                        </form>
                                        <p id="x6">&times</p>
                                    </div>
                                </div>
                                <div class="oly-cn1">
                                        <div class="oly-n1">
                                            <div class="oly-img">
                                                <img src="cycle7.jpg">
                                            </div>
                                            <form method="post" action="cn1.php">
                                            <div class="oly-info-n1">
                                                <p>NEW12332</p>
                                                <p>Rs.40000.00</p>
                                                <button id="oly-bn1">BUY</button>
                                            </div>
                                            </form>
                                            <p id="x7">&times</p>
                                        </div>
                                    </div>
                                    <div class="oly-cn2">
                                            <div class="oly-n2">
                                                <div class="oly-img">
                                                    <img src="cycle1.jpg">
                                                </div>
                                                <form method="post" action="cn2.php">
                                                <div class="oly-info-n2">
                                                    <p>NEW33232</p>
                                                    <p>Rs.45999.00</p>
                                                    <button id="oly-bn2">BUY</button>
                                                </div>
                                                </form>
                                                <p id="x8">&times</p>
                                            </div>
                                        </div>
                                        <div class="oly-cn3">
                                                <div class="oly-n3">
                                                    <div class="oly-img">
                                                        <img src="cycle2.jpg">
                                                    </div>
                                                    <form method="post" action="cn3.php">
                                                    <div class="oly-info-n3">
                                                        <p>NEW24456</p>
                                                        <p>Rs.60000.00</p>
                                                        <button id="oly-bn3">BUY</button>
                                                    </div>
                                                    </form>
                                                    <p id="x9">&times</p>
                                                </div>
                                            </div>
                                            <footer>
                                                    <p><a href="getintouch.html" style="text-decoration: none;">Let us know each other</a><!---<span style="float:right">Follow</span>-->
                                                    <a href="https://www.facebook.com" target="_blank"><img src="facebook.png" title="Facebook"></a>
                                                    <a href="https://www.instagram.com" target="_blank"><img src="instagram.png" title="Instagram"></a>
                                                    <a href="https://twitter.com" target="_blank"><img src="twitter.png" title="twitter"></a></p>
                                            </footer>
                    </body>
</html>