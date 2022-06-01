<?php include('server.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>User registration</title>
    <link rel="stylesheet" href="style.css">
</head>
<body background="images/login_bg3.jpg" style="background-repeat:no repeat;background-size:cover;">
   <div class="header">
       <h2 style="color:white;text-align:center;">Welcome </h2>
       
   </div> 
   <div class="content" style="text-align:center; color:white;">
       <?php
       if (isset ($_SESSION['success']));?>
      <div class="error success">
          <h3>
              <?php 
              echo $_SESSION['success'];
              unset ($_SESSION['success']);
              ?>
              </h3>
      </div> 
      
      <?php if (isset ($_SESSION['email'])): ?>
      <p> Welcome <strong><?php echo $_SESSION ['email']; ?></strong></p>
      <p><a href="index2.php?logout='1' "style ="color:#DE4623;"> Logout</a></p>
       <?php endif ?>
   </div>
</body>
</html>