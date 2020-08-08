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
                    // header("location:main-page.php");
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