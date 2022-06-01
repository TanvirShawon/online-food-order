<?php

require_once("connect.php");

if (isset($_REQUEST["editButton"])) {

  $fname = $_REQUEST["movie"];
  $lname = $_REQUEST["movie_time"];
  $email_addr = $_REQUEST["movie_date"];
  $usr_pwd = $_REQUEST["avatar"];
  $editingID= $_REQUEST["editingID"];

  $upquery = "UPDATE admin SET movie='$fname', movie_time='$lname', movie_date='$email_addr',avatar='$usr_pwd' WHERE id=$editingID ";

  $runquery = mysqli_query($connect,$upquery);

  if($runquery==true)
    header("location: admin_data.php?edited");
 ?>
