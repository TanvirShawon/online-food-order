<?php
  require_once("config.php");

  $userInputName= $_REQUEST["username_login"];
  $userInputpwd= $_REQUEST["password_login"];

  $matchquery = "SELECT * FROM register WHERE username='$userInputName' AND password='$userInputpwd'";

  $runmatchquery=  mysqli_query($conn, $matchquery);

  $checkcount = mysqli_num_rows($runmatchquery);
  if ($runmatchquery== true) {
    if ($checkcount ===1) {
      setcookie("currentUser", $userInputName, time()+(86400*7));
      header("location: profile.php");
    }

    else {
      header("location: reg-section.php?wrong_info");
    }
  }
 ?>
