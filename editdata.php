<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>CHAYA CHOBI</title>
</head>
<body>

<?php

require_once("connect.php");

if (isset($_REQUEST["edit_id"])) {
  $editID = $_REQUEST["edit_id"];


$selectInfo = "SELECT * FROM admin WHERE id= 10";
$runInfo = mysqli_query($connect,$selectInfo);

while($getData = mysqli_fetch_array($runInfo)){

  ?>

  <form action="editdata_core.php" method="POST">
    <input type="text" name="fname" value="<?php echo $getData["movie"]; ?>" placeholder="First Name"/>
    <input type="text" name="lname" value="<?php echo $getData["movie_time"]; ?>" placeholder="Last Name"/>
    <input type="email" name="email_addr" value="<?php echo $getData["movie_date"]; ?>" placeholder="Email"/>
    <input type="password" name="usr_pwd" value="<?php echo $getData["avatar"]; ?>" placeholder="password"/>
    <input type="hidden" name="editingID" value="<?php echo $editID; "/>
    <input type="submit" name="editButton" value="UPDATE DATA"/>

  </form>


<?php} } ?>



<div class="container my-1 bg-dark text-light">
  <div class="row">
    <hr>
    <div class="col-md-5 mt-1">
      <b>Chaya Chobi Motion Limited 2020 © All Rights Reserved.</b>
    </div>
    <div class="col-md-2">

    </div>
    <div class="col-md-2">

    </div>
    <div class="col-md-3 mt-1">
      <b>Develop by Tanvir & Kashfi</b>
    </div>
  </div>
</div>


</body>
</html>
