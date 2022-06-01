<?php require_once("header.php"); ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <style>

      #search-username{

      }
      #search-result{
          font-size: 17px;
          padding: 5px;
          width: 400px;
      }
  </style>

  <meta charset="UTF-8">
    <meta name="description" content="Free Web tutorials">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="author" content="John Doe">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chinese Cuisine</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="reg_style.css">
    
</head>
<body background="images/login_bg2.jpg" style="background-repeat:no repeat; background-size:cover">

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
                        <a class="nav-link ml-3" href="about.php">ABOUT US</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link ml-3" href="contact.php">CONTACT US</a>
                    </li>


                   
                </ul>
            </div>
        </div>
    </nav>

  <section id="reg-section" class="pt-5">
    <div class="reg-content">
      <div class="container">


          <div class="col-md-8"></div>
          
          <div class="col-md-4 pt-5">
          




            <br>
            <br>
            <div class="card " style="background: #DE4623;">

              <div class="card-body">
                <h3 class="text-light">Log In</h3>
                <p class="text-light">Please fill out to login</p>



                <form class="" action="login_core.php" method="post">

                  <div class="form-group">
                    <input type="text" name="username_login" value="" placeholder="Username" class="form-control">
                  </div>
                  <div class="form-group">
                    <input type="password" name="password_login" value="" placeholder="Password" class="form-control">
                  </div>
                  <div class="form-group">
                    <button id="loginbutton" name="loginbtn" value="login" class="btn btn-outline-light btn-block">Submit</button>
                  </div>


                  <?php
                    if (isset($_REQUEST["wrong_info"])) {
                      echo'<b style="color:red"> Username or Password is wrong!</b>';
                    }
                    if (isset($_REQUEST["pass_error"])) {
                      echo'<b style="color:red">Password is too short!</b>';
                    }

                   ?>
                </form>


                 <div class="form-group">
                  <button class="btn btn-outline-warning btn-block" data-toggle="modal" data-target="#modal-button">Register Now!</button>
                  <br />
                  <b style="color:blue">
                    <?php
                    if (isset($_REQUEST['done_signup'])) {
                      echo $_REQUEST["done_signup"];
                    } ?>

                  <div class="modal" id="modal-button">
                    <div class="modal-dialog">
                      <div class="modal-content" style="background: #DE4623;" >
                        <div class="modal-header">
                          <h3 class="modal-title text-light">Register Now!</h3>
                          <button class="close text-light" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body " style="background: #DE4623;">






                          <form class="text-left text-light" action="insert.php" method="POST">
                            <div class="form-group">
                              <!-- <input type="text" name="username" value="" placeholder="Username" required class="form-control"> -->

                                <div id="search-box">

                                  <input type="username" id="search-username" name="username" placeholder="Enter your username" required class="form-control">
                                </div>
                              <div id="search-result"></div>


                            </div>

                            <div class="form-group">
                                <input type="text" name="firstname" value="" placeholder="First name" required  class="form-control" >
                            </div>

                            <div class="form-group">
                              <input type="text" name="surname" value="" placeholder="Surname" required  class="form-control">
                            </div>

                            <div class="form-group">
                              <input type="email"name="email" value="" placeholder="Email address" required  class="form-control">
                            </div>

                            <div class="form-group">
                              <input type="phone" name="phone" value="" placeholder="Phone number" required class="form-control">
                            </div>

                            <div class="form-group">
                              <label>Birthday</label>
                              <input type="date" name="birthday" value="" required class="form-control">
                            </div>
                            <div class="form-group">
                              <h3 style="font-size:20px">Gender</h3>
                              <div class="gender"  class="form-control">
                                <input type="radio" name="gender" value="male" required>
                                Male
                                <input type="radio" name="gender" value="female" required>
                                Female
                              </div>
                            </div>



                            <div class="form-group">
                              <!-- <input type="password" name="password" value="" placeholder="Password (atleast 6 character)" required class="form-control"> -->

                              <div id="search-box1">

                                <input type="password" id="search-password" name="password" placeholder="Password (atleast 6 character)" required class="form-control">
                              </div>
                            <div id="search-result1"></div>

                            </div>





                            <div class="form-group">
                              <p>Profile Picture</p>
                              <input  type="file" name="avatar"/>
                            </div>


                            <button type="submit"  name="submit" class="btn btn-outline-warning btn-block">Submit</button>



                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php require_once("footer.php"); ?>

      </div>
    </div>
    <br>



  </section>







<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

  <script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
    <script>
    $(document).ready(function(){
       $('#search-username').blur(function(){
          var value = $(this).val();
          liveCheckusername(value);
       });
    });

    function liveCheckusername(val) {
        $.post('process.php',{'username':val}, function(data){
            if(data == "Found") {
                $('#search-result').html("<span style='color:red; font-weight:bold;'>Username is already Registered</span>");
            } else {
                $('#search-result').html("<span style='color:green; font-weight:bold;'>Username is Available</span>");
            }
        }).fail(function(xhr, ajaxOptions, throwError) {
        alert(throwError);
        });
    }
    </script>

    <script>
    $(document).ready(function(){
       $('#search-password').blur(function(){
          var value = $(this).val();
          liveCheckpassword(value);
       });
    });

    function liveCheckpassword(val) {
        $.post('process1.php',{'search-password':val}, function(data){
            if(data == "Found") {
                $('#search-result1').html("<span style='color:green; font-weight:bold;'></span>");
            } else {
                $('#search-result1').html("<span style='color:red; font-weight:bold;'>Less than 6 character</span>");
            }
        }).fail(function(xhr, ajaxOptions, throwError) {
        alert(throwError);
        });
    }
    </script>
    
    
    
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
    
    

</body>
</html>
