<?php
require_once("cart-configure.php");
if($_SERVER["REQUEST_METHOD"]=="POST") 
{
    try{
        $row_id = $row["c_id"];
        $sql_d = "DELETE FROM cart WHERE c_id ='".$row_id."'";
        $result_d = $conn->exec($sql_d);
        if(!$result === TRUE)
    {
        // create a overlay container
        echo "Item not added";
    }
}
    catch(PDOException $e)
    {
        echo "Item cannot be deleted".$e->getMessage();
    }
    header("location:cart.php");
    }


unset($result_d);
unset($conn);
?>
