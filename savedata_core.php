
<?php
require_once("connect.php");

$food= $_POST['food'];



$avatar= $_POST['avatar'];
$price= $_POST['price'];
$product_code= $_POST['product_code'];

$insertQuery= "INSERT into admin(food, avatar, price, product_code) VALUES('$food', '$avatar','$price','$product_code')";

$runQuery = mysqli_query($connect,$insertQuery);

if($runQuery==true){
  header("location: admin_data.php?action=true");
}else{
  header("location: admin_data.php?action=false");
}

?>
