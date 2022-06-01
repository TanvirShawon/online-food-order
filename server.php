<?php
session_start();

  $name ="";
  $phone_number="";
  $address="";
  $email="";
  $errors =array();
$db = mysqli_connect('localhost','root','','website_project');

if(isset($_POST['web'])){
    $name =($_POST['name']);
    $phone_number =($_POST['phone_number']);
    $address =($_POST['address']);
    $email =($_POST['email']);
    $password_1 =($_POST['password_1']);
    $password_2 =($_POST['password_2']);
    
    if(empty($name)){
        array_push($errors,"Name is required");
    }
      if(empty($phone_number)){
        array_push($errors,"Phone Number is required");
    }
      if(empty($address)){
        array_push($errors,"Address is required");
    }
       if(empty($email)){
        array_push($errors,"Email is required");
    }
      if(empty($password_1)){
        array_push($errors,"Password is required");
    }
    if(empty($password_2)){
        array_push($errors,"Password is required");
    }
    if($password_1 != $password_2){
        array_push($errors,"The two password do not match");
    }
    if(count($errors)==0){
        $password= md5($password_1);
        $sql="INSERT INTO register(name,phone_number,address,email,password)
                   VALUES('$name','$phone_number','$address','$email','$password')";
        
        mysqli_query($db,$sql);
        $_SESSION['email']=$email;
        $_SESSION['success']="You are now logged in";
        header ('location: index2.php');
        
    }
   
}

//login

if (isset($_POST['login'])){
  
    $email =($_POST['email']);
    $password =($_POST['password']);

       if(empty($email)){
        array_push($errors,"Email is required");
    }
    
       if(empty($pasword)){
        array_push($errors,"Password is required");
    }
     if(count($errors)==0){
        $password= md5($password);
        $query="SELECT * FROM register WHERE email='$email' AND password='$password'";
         $result=mysqli_query($db,$query);
         
         if(mysqli_num_rows($result)==1)
         {
              $_SESSION['email']=$email;
        $_SESSION['success']="You are now logged in";
        header ('location:index2.php');
        
         }
         else {
             array_push($errors,"wrong email/password combination ");
                
         }
     }
}
//logout

if (isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['email']);
    header('location:login-section.php');
}




?>