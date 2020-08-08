<?php
session_start();
if(!isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == false)
{
    header("location:login.php");
    exit;
}
?>
<?php
require_once("cart-configure.php");
if($_SERVER["REQUEST_METHOD"]=="POST") 
{
    $cost = 0;
    $qty=$_POST["child-book-1"];
    $cost = $qty*60;
    try{$sql = "INSERT INTO cart(c_id,c_image,c_name,c_qty,c_price)VALUES(11,'child-book-1.jpg','PANCHATANTRA','".$qty."','".$cost."')";
    $result = $conn->exec($sql);
    if(!$result)
    {
        // create a overlay container
        echo "Item not added";
    }}
    catch(PDOException $e)
    {
        echo "Already item exists".$e->getMessage();
        header("location:books.php");
    }
}
unset($conn);
?>
<html>
    <title>Panchatantra</title>
    <head>
            <link href="https://fonts.googleapis.com/css?family=Bitter&display=swap" rel="stylesheet">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <style>
            body{
                background-color: rgba(0, 0, 0, 0.466)
            }
        .main-container{
            margin-top: 75px; 
                width:700px;
                height:500px;
            background-color: rgb(236, 229, 193);
            margin-left: 300px;
        }
        .Image{
            
            width:50%;
            height: 100%;
            background-color: brown;
            float: left;
        }
        .Image img{
            position: relative;
            padding: 60px 50px 50px 50px;
            width: 250px;
            shadow: 0px 8px 16px 0px rgba(255, 255, 255, 0.082);
        }
        .info{
            background-color: blue;
            width: 50%;
            float: left;
            height: 100%;
            font-size: 38px;
            text-align: center;
            
        }
        #p1{
            font-size: 38px;
            font-family: 'Bitter', serif;
        }
        #c{
            font-family: 'Bitter', serif;
            font-size: 30px;
        }
        #ip{
            font-size: 15px;
            width:100px;
            height: 50px;
            text-align: center;
            font-size: 30px;
            color:coral;
            border-color: black;
        }
        #btn{
            background-color: rgb(108, 238, 115);
            font-size: 20px;
            border:none;
            color: rgb(255, 0, 0);
            padding:15px 15px 8px 15px;
            text-align:center;
            font-weight: bolder;
            cursor: pointer;
        }
        #btn:hover{
            background-color: rgb(255, 10, 10);
            color:rgb(246, 248, 248);
            transition-duration: 1s;
        }
        #close{
            position: relative;
            height: 32px;
            width: 30px;
            float: right;
            bottom:500px;
            right:0px;
            text-align: center;
            color:white;
            background-color: rgb(14, 13, 13);
            border:none;
            border-color: none;
            font-size: 20px;
            font-weight: bold;
            cursor:pointer;
        }
        #close:hover{
            height: 32px;
            width: 75px;
            transform: scale(1);
            transition-duration: 0.3s;
            
        }
        </style>
    </head>
    <body>
            <script>
                var x = document.getElementById("ip");
                function buyfn(){
                if(x>4)
                {
                    window.alert("Select Quantity less than 4");
                }}
                function price(x){
                    document.getElementById("cost").innerHTML= x*60;
                }
                $(document).ready(function(){
                        $("#close").click(function(){
                            $(".main-container").hide();
                            window.location.href = "books.php";
                        });
                        $("#close").mouseover(function(){
                            $("#close").text("CLOSE");
                        });
                        $("#close").mouseleave(function(){
                            $("#close").text("X");
                        });
                });
                </script>
                
        <!-- DO some image magnifier thin -->
        <form method="post" action="<?php $_SERVER["PHP_SELF"] ?>">
        <div class="main-container">
            <div class="Image">
                <img src="child-book-1.jpg" alt="child-book-1" title="Panchatantra">
            </div>
            <div class="info">
                <p id="p1">Panchatantra</p><br>
                <p id="c">Rs.60</p><br>
                <input id="ip" type="number" placeholder="Qty" name="child-book-1" 
                min="1" max="4" oninput="price(this.value)" onchange="price(this.value)">
                <label><button id="btn" onclick="buyfn()"><b>BUY</b></button></label>
                <p>Total Price: <span id="cost"></span></p>
            </div>
            <div >
                
                    <button onclick="close()" id="close">X</button>
                    
                  
                </div>
        </div>
    </form>
    </body>
</html>