
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chinese Cuisine </title>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500;600;700;900&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/a69d77f6ac.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="restaurant-style.css">
</head>

<body>
<section id="about">
        <div class="about-us">



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
                        <a class="nav-link ml-3" href="contact.php">CONTACT US</a>
                    </li>


                </ul>
            </div>

        </div>
    </nav>




            <div class="about-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <img src="photo/pic2.jpg" alt="">
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <h2 style="color: #DC4523;">READ HERE</h2>
                            <!--	<h2>We have over<br> <span style="color: #DC4523;">15 years</span> of <br>experience</h2>  -->
                            <p class="p1">"Bringing good food into your everyday. That's our mission.

That means we don't just deliver--we bring it, always going the extra mile to make your experience memorable.

And it means this is delicious food you can enjoy everyday: from vibrant salads for healthy office lunches, to indulgent family-sized pizzas,
to fresh sushi for a romantic night in. Whatever you crave, we can help."</p>
                            <p class="p2">Aliquam erat ac ipsum. Integer aliquam purus. Quisque lorem tortor<br>
fringilla sed, vestibulum id, eleifend justo vel bibendum sapien<br> massa ac turpis faucibus orci luctus non,
consectetuer lobortis quis,<br> varius in, purus. Integer ultrices posuere cubilia Curae, Nulla ipsum<br>
dolor lacus, suscipit adipiscing. Quisque lorem tortor fringilla sed,<br> vestibulum id, eleifend justo vel
bibendum sapien massa ac turpis<br> faucibus orci luctus non, consectetuer lobortis quis, varius in, purus.<br>
Integer ultrices posuere cubilia Curae, Nulla ipsum dolor lacus,<br> suscipit adipiscing. Cum sociis natoque penatibus et ultrices<br> volutpat.</p>




                                            <?php
            if (isset($_REQUEST["wrong_info"])) {
              echo'<b style="color:red"> Username or Password is wrong!</b>';
            }
           ?>
          <button class="btn btn-outline-light ml-5" data-toggle="modal" data-target="#btn" style="background:#DC4523; ">Admin</button>
                 <div class="modal" id="btn">
                   <div class="modal-dialog">
                     <div class="modal-content">
                       <div class="modal-header " style="background:#DC4523; ">
                         <p style="font-size: 40px; color:white">Admin Please Login!</p>

                       </div>





                       <div class="modal-body text-dark">
                         <form class="" action="login_core_admin.php" method="post">

                           <div class="form-group">
                             <input type="text" name="username" value="" placeholder="Username" class="form-control">
                           </div>
                           <div class="form-group">
                             <input type="password" name="password" value="" placeholder="Password" class="form-control">
                           </div>
                           <div class="form-group">
                             <button id="loginbutton" name="loginbtn" value="login" class="btn btn-primary">Submit</button>
                           </div>



                         </form>
                        </div>

                       <div class="modal-footer">

                       </div>
                     </div>

                   </div>
                 </div>







                        </div>
                    </div>

                </div>













            </div>
        </div>
    </section>




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

     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>
