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
    <title>Cart</title>
    <head>
            <link rel="icon" href="LOC-logo.png" type="iamge/icon type">
    <h1>My Cart</h1>
    <link href="https://fonts.googleapis.com/css?family=Roboto|Ubuntu&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="cart.css">
 
        <script>
         
            $(document).ready(function(){
                $("#remove").mouseover(function(){
                    $("#remove").text("DELETE");
                    $("#remove").css(padding,"17px 40px");
                });
                $("#remove").mouseleave(function(){
                    $("#remove").text("REMOVE");
                    $("#remove").css(padding,"17px 25px");
                });
                $("#goback").click(function(){
                    //window.history.back();
                    // header("location:  main-page.php");
                    // window.location.href="main-page.php";
                    $(location).attr('href',main-page.php);
                });
            });
            </script>
    </head>
    <body>
        <div class="cart-top-info">
            <p id="cti1">MY Items</p>
            <p id="cti2">Name</p>
            <p id="cti3">Quantity</p>
            <p id="cti4">Price</p>
        </div>

        <!-- <form name="cart" method="post" action="<?php $_SERVER["PHP_SELF"]?>">  -->
<?php
require_once("cart-configure.php");
        $sql_c = "SELECT * FROM cart";
        if($result = $conn->query($sql_c)){
        if($result->rowCount()>0){
            $totalprice= 0;
           $imagesrc = "";
            while($row=$result->fetch()){
                $imagesrc="X:/LOC/";
                $imgsrc = $imagesrc.$row["c_image"];
                // $imgsrc = $row["c_image"];
                echo "<div class='prod-info'>";
                    echo "<img src='$imgsrc'>";
                    // echo $row['c_image'];
                echo "<div class='name'>";
                    echo "<p id='name'>".$row['c_name']."</p>";
                echo "</div>";
                    echo "<div class='qty'>";
                        echo "<p id='qty'>".$row["c_qty"]."</p>";
                    echo "</div>";
                    echo "<div class='price'>";
                        echo "<p id='price'>".$row['c_price']."</p>";
                    echo "</div>";
                    echo "<div class='edit'>";
                        echo "<div class='remove'>";
                        echo "<form method='post' action='deleteitem.php'>";
                            echo "<button type='submit' id='remove'>REMOVE</button>";
                            echo "</form>";
                            echo "</div>";
                        echo"<div class='goback'>";
                            echo"<button id='goback'><a href='main-page.php' style='text-decoration:none'>GO-BACK</a></button>";
                        echo"</div>";
                    echo"</div>";
                echo"</div>";
               $totalprice+=$row["c_price"];

            }
        
            }
            }

unset($result);
unset($conn);
?>
        <!-- <div class="prod-info">
            <img src="" alt="image">
            <div class="name">
                    <p id="name">NAME</p>
                </div>
            <div class="qty">
                <p id="qty">QTY</p>
            </div>
            <div class="price">
                <p id="price">PRICE</p>
            </div>
            <div class="edit">
            <div class="remove">
                <button id="remove">REMOVE</button>
                </div>
            <div class="goback">
                <button id="goback">GO-BACK</button>
            </div>
            </div>
        </div> -->
        
        <div class="checkout">
            <p id="total">TOTAL= <span id="total-cost"><?php echo $totalprice;?></span></p>
            <button id="checkout"><a href="payment.php" style="text-decoration:none;color:black">CHECK OUT</a></button>
        </div>
    </body>

</html>
