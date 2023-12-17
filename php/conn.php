<?php 

  $host = "localhost";
  $u = "root";
  $p = "";
  $db = "nlights";

  $conn = mysqli_connect($host, $u, $p);

  if (!$conn) {
    echo"not connected". mysqli_connect_error();
  }else{
    echo "connected";
  }
?>