<?php
require_once("cart-configure.php");
if($_SERVER["REQUEST_METHOD"]=="POST") 
{
    $qty=1;
    $cost = $qty*45999;
    try{$sql = "INSERT INTO cart(c_id,c_image,c_name,c_qty,c_price)VALUES(48,'cycle1.jpg','NEW33232','".$qty."','".$cost."')";
    $result = $conn->exec($sql);
    if(!$result)
    {
        // create a overlay container
        echo "Item not added";
    }}
    catch(PDOException $e)
    {
        echo "Already item exists".$e->getMessage();
    }
    header("location:cycle.php");
}
unset($conn);
?>