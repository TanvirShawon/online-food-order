
<?php
require_once("connect.php");

$food= $_POST['food'];
$avatar= $_POST['avatar'];
$price= $_POST['price'];
$offerprice= $_POST['offerprice'];
$product_code= $_POST['product_code'];

$insertQuery= "INSERT into offer(food, avatar, price, offerprice, product_code) VALUES('$food', '$avatar','$price','$offerprice','$product_code')";

$runQuery = mysqli_query($connect,$insertQuery);

if($runQuery==true){
  header("location: offer_data.php?action=true");
}else{
  header("location: offer_data.php?action=false");
}

?>
