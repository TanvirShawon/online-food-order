
<?php
if(!isset($_COOKIE["currentUser"])){
  ("location:reg-section.php");
}?>

<?php require_once("header.php");
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="description" content="Free Web tutorials">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="author" content="Tanvir Ahmed">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">\

    <style>
    body{
      background-image: url(avatar/images%20(1).jpg;

      background-size: cover;
      background-repeat: no-repeat;
      background-position: top;
      background-attachment: fixed;

    }
  </style>

    <!-- bootstrap css-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- style css-->
    <link rel="stylesheet" href="profile_style.css">
    <!-- font awesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
    <link rel="stylesheet" href="reg_style.css">


    <title>Chinese Cuisine </title>
  </head>
  <body >

<!--  -->
    <br><br><br>



     <nav class="navbar navbar-expand-md fixed-top pt-2 pb-1">
        <div class="container">

            <!-- Brand/logo -->
            <a class="navbar-brand" href="#"><img src="photo/logo.png" alt="" style="width: 62px; height: 62px; margin-top:15px; margin-bottom:8px;"></a>
            <!-- Toggler/collapsibe Button -->

                           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <!-- Links -->
                <ul class="navbar-nav mr-auto p-3">
                  <li class="nav-item">
                      <!--					<a class="nav-link active border border-danger border-top-0 border-right-0 border-left-0 ml-3" href="#home">HOME</a>-->
                      <a class="nav-link ml-3" href="cartpage.php">HOME</a>
                  </li>


                 <li class="nav-item">
                      <a class="nav-link ml-3" href="cartpage.php">MENU</a>
                  </li>

                  <li class="nav-item">
                       <a class="nav-link ml-3" href="offer.php">OFFER</a>
                   </li>


                    <li class="nav-item">
                      <a class="nav-link ml-3" href="profile.php">PROFILE</a>
                  </li>



                </ul>
            </div>
        </div>
    </nav>
    <?php
      if(isset($_COOKIE["currentUser"])){
        $currentUserTarget = $_COOKIE["currentUser"];

        $nameQuery= "SELECT * FROM register WHERE username='$currentUserTarget'";
        $runNameQuery = mysqli_query($conn, $nameQuery);

        if($runNameQuery ==true){
          while($getRow = mysqli_fetch_array($runNameQuery)){  ?>


            <div class="profile-section" style="background-color:#e0baba;">
              <div class="container text-center text-white">
                <div class="row">
                  <div class="col-md-4">
                    <div class="proimg">
                      <br>

                      <img style="margin-top:30px; margin-left:0px; width:280px; height:300px; border-radius:10px;" class="proimg" src="avatar/<?php echo $getRow['avatar'];?>" alt="">

                    </div>
 </div>
 <br>
 <br>
 <br>

<div class="col-md-8">

                    <h3 class="text-light mt-5" style="text-shadow:2px 2px black;">WELCOME!</h3>
                    <b class="lead display-4 text-light" style="text-shadow:2px 2px black"> <?php echo $getRow['firstname'];?> </b>
                    <b class="lead display-4 text-light" style="text-shadow:2px 2px black"> <?php echo $getRow['surname'];?> </b>
                    <hr>

                    <i  style="font-size: 20px;" class=" text-light" style="text-shadow:2px 2px black"> <?php echo $getRow['email'];?> </i>
                    <br>

                    <b  style="font-size: 20px;" class="  text-light" style="text-shadow:2px 2px black">Birthday: <?php echo $getRow['birthday'];?> </b>
                    <br>

                    <b  style="font-size: 20px;" class=" display-5 text-light" style="text-shadow:2px 2px black"> <?php echo $getRow['phone'];?> </b>

                    <br>
                    <br>
                    <br>

                    <a class="mr-20 btn btn-info" href="logout_core.php">Logout</a>


                    <br><br><br><br><br><br>
                  </div>
                </div>
              </div>
            </div>





            <?php




          }
        }
      }
     ?>


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


<!--
     <div class="bg-dark text-light pt-1">
       <div class="row">
         <hr>
         <div class="col-md-1 mt-1">

         </div>
         <div class="col-md-6">
           <b>Chinese Cuisine © All Rights Reserved.</b>
         </div>
         <div class="col-md-2">

         </div>
         <div class="col-md-3 ">
           <b>Develop by Shahanaz Islam & Faria Afrin</b>
         </div>
       </div>
     </div>
-->
    <!-- bootstrap js-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>
