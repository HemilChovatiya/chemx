<?php  
  $host = "localhost:3307";
  $user = "root";
  $pass = "";
  $db = "chemx";

  $con = mysqli_connect($host,$user,$pass,$db);

  if(!$con){
      die("Database Connection Error");
  }
?>