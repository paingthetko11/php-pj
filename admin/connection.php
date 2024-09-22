<?php
  $con=mysqli_connect("localhost", "root", "", "fooddelidb");
  if(mysqli_connect_errno()){
    echo "Connection Fail".mysqli_connect_error();
  }
?>
