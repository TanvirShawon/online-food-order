<?php
  require_once("config.php");

  $userInputName= $_REQUEST["username"];
  $userInputpwd= $_REQUEST["password"];

  $matchquery = "SELECT * FROM admin_register WHERE username='$userInputName' AND password='$userInputpwd'";

  $runmatchquery=  mysqli_query($conn, $matchquery);

  $checkcount = mysqli_num_rows($runmatchquery);
  if ($runmatchquery== true) {
    if ($checkcount ===1) {
     setcookie("currentUser", $userInputName, time()+(86400*7));
      header("location: admin_data.php");
    }

    else {
      header("location: about.php?wrong_info");
    }
  }
 ?>
