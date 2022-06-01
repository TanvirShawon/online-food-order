<?php
require_once("config.php");

$username= $_POST['username'];

$firstname= $_POST['firstname'];

$surname= $_POST['surname'];

$email= $_POST['email'];

$phone= $_POST['phone'];

$birthday= $_POST['birthday'];

$gender= $_POST['gender'];

$password= $_POST['password'];

$avatar= $_POST['avatar'];




$matchquery = "SELECT username FROM register WHERE username='$username'";

$runmatchquery=  mysqli_query($conn, $matchquery);

$checkcount = mysqli_num_rows($runmatchquery);
if ($runmatchquery== true) {
	if ($checkcount ===1) {
	 header("location: reg-section.php?unique");
	}

	else {

		$checkpasslen = strlen($password);
		if ((($checkpasslen)>5)==false) {
			header("location: reg-section.php?pass_error=Password is too short!");
		}

	else {
		$insertSignupData= "INSERT into register(username, firstname, surname, email, phone, birthday, gender, password, avatar) VALUES('$username', '$firstname', '$surname', '$email', '$phone', '$birthday', '$gender', '$password', '$avatar')";

		$runquery = mysqli_query($conn, $insertSignupData);

		if($runquery== true)
		{
			header("location:reg-section.php?done_signup=Registration Successful!");
		}
	}

	}
}

?>
