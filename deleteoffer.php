<?php

  require_once("connect.php");

  $getID = $_REQUEST["id"];
  $dltquery = "DELETE FROM offer WHERE id=$getID";
  $runDlquery = mysqli_query($connect,$dltquery);

  if($runDlquery==true){
    header("location: offer_data.php?deleted");
  }

 ?>
