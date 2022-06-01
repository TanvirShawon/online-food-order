

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
     <title>Chinese Cuisine </title>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500;600;700;900&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/a69d77f6ac.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
<!--    <link rel="stylesheet" type="text/css" href="restaurant-style.css">-->
</head>


<body>




<a href="cartpage.php" style="text-decoration:none"><input value="Shop More" class="btn btn-block" style="background:#DC4523; color:white"></a>

<?php
	require 'config.php';

	$grand_total = 0;
	$allItems = '';
	$items = [];

	$sql = "SELECT CONCAT(food, '(',qty,')') AS ItemQty, total_price FROM cart";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$result = $stmt->get_result();
	while ($row = $result->fetch_assoc()) {
	  $grand_total += $row['total_price'];
	  $items[] = $row['ItemQty'];
	}
	$allItems = implode(', ', $items);
	echo "Transaction Succeeded";
	
	
	
	
?>

</body>
</html>