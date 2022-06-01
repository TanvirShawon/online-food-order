<?php
if(!isset($_COOKIE["currentUser"])){
  ("location:home.php");

}?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="description" content="Free Web tutorials">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="author" content="Shahanaz Islam & Faria Afrin">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>

    body{
      
      background-image: url(avatar/pic1.jpg);
      background-size: cover;
      background-repeat: no-repeat;
      background-position: top;
      background-attachment: fixed;
    }
table, th, td {
  border: 2px solid #DC4523;
}
</style>
    <!-- bootstrap css-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- style css-->

    <link rel="stylesheet" href="style.css" type="text/css">
    <!-- font awesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
<link rel="stylesheet" href="reg_style.css">

    <title>Chinese Cuisine</title>
    </head>
  <body>

        <section id="admin-section">

            <nav class="navbar navbar-expand-md fixed-top pt-2 pb-1">
        <div class="container">

            <!-- Brand/logo -->
            <a class="navbar-brand" href="#"><img src="photo/logo.png" alt="" style="width: 62px; height: 62px;"></a>
            <!-- Toggler/collapsibe Button -->

                           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <!-- Links -->
                <ul class="navbar-nav mr-auto p-3">
                    <li class="nav-item">
                        <!--					<a class="nav-link active border border-danger border-top-0 border-right-0 border-left-0 ml-3" href="#home">HOME</a>-->
                        <a class="nav-link ml-3" href="home.php">HOME</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link ml-3" href="gallery-section.php">GALLERY</a>
                    </li>

                  <li class="nav-item">
                        <a class="nav-link ml-3" href="admin_data.php">ADMIN</a>
                    </li>



                </ul>
            </div>
        </div>
    </nav>

            <?php
            if(!isset($_COOKIE["currentUser"])){
              ("location:home.php");

            }?>



              <p style="margin-top:90px;"class="text-center text-light display-4 font-weight-bold bg">WELCOME ADMIN!</p>
              <p style="margin-right:30px; margin-top:10px;"class="text-right"><a class=" btn btn-info" href="logout_core_admin.php" >Logout</a></p>
              <hr>
              <div class="row">
                <div class="col-md-4">

                </div>
                <div class="col-md-4">
                  <form class="" style="background:#DC4523" action="savedata_core.php" method="post">
                    <h2 class="text-center">Input Data </h2>







                    <hr>
                          <div class="form-group px-4">
                              <input type="text" name="food" value="" placeholder="Food  Name" class="form-control ">
                          </div>
                              <div class="form-group px-4">
                                <input type="text" name="price" value="" placeholder="Price" class="form-control">
                            </div>

                            <div class="form-group px-4">
                                <input type="file" name="avatar" value="" placeholder="" class="form-control">
                            </div>
                            <div class="form-group pb-3 px-4">
                                <button  name="submitbtn" value="Save Data" class="btn btn-outline-light btn-block" class="form-control ">Submit</button>
                            </div>
                  </form>
                </div>
              </div>

<br><br><br>
<?php
if(isset($_REQUEST["action"])){
  if($_REQUEST["action"]=="true"){
    echo "<font color='green'>Data inserted!</font>";
  }
  else{
    echo "<font color='red'>Data not inserted!</font>";
  }
}


if(isset($_REQUEST["deleted"])){
  echo "<font color='red'>Data has been Deleted!</font>";

}
?>
          <div class="row">

                <div class="col-md-2">
                </div>


                <div class="col-md-8">
                  <table style="width:1000px;" class="text-center bg-light">
                    <tr>
                      <td><b>S.N</b></td>
                      <td><b>DB ID</b></td>
                      <td><b>Food Name</b></td>
                      <td><b>Food Image</b></td>
                      <td><b>Price</b></td>

                      <td><b>Action</b></td>
                    </tr>


                    <?php

                    // Create connection
                    $conn = new mysqli('localhost','root','','website_project');
                    // Check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                  $sql = "SELECT id, food, avatar,price FROM admin";
                  $result = $conn->query($sql);


                  if ($result->num_rows > 0) {
                    $snCount=1;
                          // output data of each row
                          while($row = $result->fetch_assoc()) {?>

                    <tr>
                      <td> <?php echo $snCount;  $snCount++;?> </td>
                      <td> <?php echo $row["id"]; ?> </td>
                      <td> <?php echo $row["food"]; ?> </td>


                      <td class="pt-2 pb-2" ><center><img  style="height:50px;width:70px"  src="avatar/<?php echo $row["avatar"]; ?>" alt=""/></center></td>
                      <td> <?php echo $row["price"]; ?> </td>

                    <td> <a onclick="return confirm('Are You Sure?');" href="deletedata_core.php?id=<?php echo $row["id"]; ?>">Delete</a>
                  </td>

                    </tr>
                         <?php

                         }
                     }
                     $conn->close();
                     ?>

                  </table>

                </div>


                <div class="col-md-2">
                </div>
                </div>
                </div>


<br><br><br>



 <div class="footer-section" style="color:#DE4623;background-color:black" >
            <div class="footer-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-sm-12 p-2">
                            <span class="text-center">© Shahanaz Islam Shaown & Faria Afrin Niha. <br> All Rights Reserved</span>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 p-2">
                            <div class="fl pl-5">
                                <i class="fab fa-facebook-f" style="color: #DC4523; width: 10px; height: 10px; padding-left: 50px;"></i>
                                <i class="fab fa-youtube" style="color: #DC4523; width: 10px; height: 10px; padding-left: 50px;"></i>
                                <i class="fab fa-twitter" style="color: #DC4523; width: 10px; height: 10px; padding-left: 50px;"></i>
                                <i class="fab fa-pinterest-p" style="color: #DC4523; width: 10px; height: 10px; padding-left: 50px;"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
       

 </section>

    <!-- bootstrap js-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>
