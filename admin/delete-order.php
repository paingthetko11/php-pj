<?php
include("connection.php"); 
$q = "delete from `order` where id='{$_GET['id']}'";
$con->query($q);
header('location:order.php');
?>