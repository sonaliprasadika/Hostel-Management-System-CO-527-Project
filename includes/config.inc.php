<?php
  session_start();
  $servername = "localhost:3308"; //change this  accordingly
  $dBUsername = "root";
  $dBPassword = "";
  $dBName = "hostel_management_system";
 // session_start();
  $conn=mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);
  // echo "connection success";
  if (!$conn) {
    die("Connection Failed: ".mysqli_connect_error());
  }
?>
