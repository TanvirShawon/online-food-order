 //reg section
   <?php 
    mysql_connect('localhost','root','','website_project')or die (mysql_error());
    mysql_select_db("register") or die(mysql_error());
    
    if(isset($_POST['Submit']))
    {
        $name=$_POST['Name'];
        $phone_number=$_POST['Phone Number'];
        $address=$_POST['Address'];
        $email=$_POST['Email'];
        $password=$_POST['Password'];
        if ($name==''){
            echo "<script>alert ('Please Enter the Name') </script>";
        }
        
        if ($phone_number==''){
            echo "<script>alert ('Please Enter the Phone Number') </script>";
        }
         if ($address==''){
            echo "<script>alert ('Please Enter the Address') </script>";
        }
        
        if ($email==''){
            echo "<script>alert ('Please Enter the Email') </script>";
        }
        
        if ($password==''){
            echo "<script>alert ('Please Enter the Password') </script>";
        }
        
        $query="insert into register(Name,Phone Number,Address,Email,Password) values('$name','$phone_number','$address','$email','$password')";
        if(mysql_query($query)){
            echo"<h3>You have registered successfully!!</h3>";
        }
    }
    
?>






'$name','$phone_number', '$address','$email','$password'
