<?php
session_start();
require_once("config.php");

if (isset($_COOKIE["currentUser"])) {
  $currentUser = $_COOKIE["currentUser"];

  $checkDb = "SELECT * FROM register WHERE username='$currentUser'";
  $runCheck = mysqli_query($conn, $checkDb);

  if(mysqli_num_rows($runCheck)===0){
    setcookie("currentUser","",time()-(86400*50));
    header("location: login.php");
  }
  // code...
}
 ?>
