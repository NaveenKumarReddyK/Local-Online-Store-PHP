<?php
$server = "localhost";
$dbpname = "productsdata";
$user = "root";
$password = "";

$conn = new PDO("mysql:host=$server;dbname=$dbpname",$user,$password);
$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
?>
