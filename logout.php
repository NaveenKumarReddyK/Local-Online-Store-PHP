<?php
session_start();
require_once("cart-configure.php");
$sql = "DELETE FROM cart";
$conn->exec($sql);
unset($conn);
$_SESSION = array();
session_destroy();
header("location:login.php");
exit;
?>