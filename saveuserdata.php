<?php
require_once("connect.php");

$products= $_POST['products'];
$amount_paid= $_POST['grand_total'];
$name= $_POST['name'];
$email= $_POST['email'];
$phone= $_POST['phone'];
$address= $_POST['address'];
$pmod= $_POST['pmod'];


 $insertQuery="INSERT INTO upcoming_trailer(name, email, phone, address, pmod, products, ) VALUES('$name','$email','$phone','$address','$pmod','$products','$amount_paid')";

$runQuery = mysqli_query($connect,$insertQuery);

if($runQuery==true){
  header("location: success.php?action=true");
}else{
  header("location: success.php?action=false");
}

?>
