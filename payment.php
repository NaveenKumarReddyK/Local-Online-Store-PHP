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
        <title>
            PAYMANET GATEWAY
        </title>
        <link rel="stylesheet" href="payment.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    </head>
        <body>
        <?php
    require_once("cart-configure.php");
    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $c_name = $_POST["nameoncard"] ;
        $c_no = $_POST["cno"] ;
        $c_exp = $_POST["exp"] ;
        $c_cvv = $_POST["cvv"] ;
        if(isset($c_name) && $c_name = null)
        {
            $nameer="Enter name on card";
        }
        if(isset($c_no) && $c_no = null)
        {
            $cnoerr="Enter card number";
        }
        if(isset($c_exp) && $c_exp = null)
        {
            $experr="Enter nexpiry month";
        }
        if(isset($c_cvv) && $c_cvv = null)
        {
            $cvverr="Enter CVV";
        }
    }
    if(empty($nameerr) &&empty($cnoerr) &&empty($experr) &&empty($cvverr))
    {
        try{$sql_c = "SELECT card_name,card_number,card_expiry,card_cvv,card_amount FROM card WHERE card_number ='".$c_no."'";
        $result = $conn->query($sql_c);
        $row = $result->fetch();
        if($result->rowCount() == 1)
        {
            if($row["card_name"] == $c_name && $row["card_number"] == $c_no && 
            $row["card_expiry"] == $c_exp && $row["card_cvv"] == $c_cvv )
            {
                if($row["card_amount"]>=$totalprice)
                {
                    $row["card_amount"]=$row["card_amount"]-$totalprice;
                    $sql_update = "UPDATE card SET card_amount=".$row["card_number"]."";
                    $conn->exec($sql_update);
                    echo "ORDER SUCCESSFULL";
                    header("location:main-page.php");
                }
            }
        }
    }
    catch(PDOExecption $e)
    {
        echo $e->getMessage();
    }
    unset($conn);
    }?>
            <form method="post" action="<?php $_SERVER["PHP_SELF"]?>">
                <div class="address">
                    <label for="addtitle" id="at">BILLING ADDRESS</label><br><br>
                    <label for="fullname" id="fn">FULL NAME</label><br>
                    <input id="fname" type="text"><br>
                    <label for="email" id="e">EMAIL</label><br>
                    <input id="email" type="emial"><br>
                    <label for="address" id="addr">ADDRESS</label><br>
                    <input id="address" type="text"><br>
                </div>
                <div class="payment">
                    <label for="paytitle" id="pt">PAYMENT</label><br><br>
                    <label for="fncard" id="fnc">NAME AS ON THE CARD</label><br>
                    <input id="nameoncard" name="nameoncard" type="text" placeholder="eg.NAVEEN KUMAR REDDY"><br>
                    <label for="cardno" id="cardno" >CARD NO</label><br>
                    <input id="cno" name="cno" type="text" size="14" maxlength="14" placeholder="1234-5678-9087"><br>
                    <label for="expiry" id="expiry">EXPIRY YEAR</label><br>
                    <input id="exp" name="exp" type="text" placeholder="eg.JULY"><br>
                    <label for="cvno" id="cvno">CVV</label><br>
                    <input id="cvv" name="cvv" type="text" maxlength="3"><br>
                </div>
                <div class="pandg">
                <div class="checkout">
                    <button id="submit" type="submit">CHECKOUT</button>
                </div>
                <div class="goback">
                   <button id="cancel"> <a href="cart.php"style="text-decoration:none;color:white">CANCEL</a></button>
                </div>
                </div>
            </form>
        </body>

    </head>
</html>