
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


<style>
    
    table, th, td {
  border: 3px solid #DC4523;
}
    </style>
<body>
 <section id="menu-section">
        <div class="menu-section-one text-center text-white">
           
           
           
           
           
           
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
                        <a class="nav-link ml-3" href="gallery-section.php">GALLERY</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ml-3" href="contact.php">CONTACT US</a>
                    </li>

                </ul>
            </div>

        </div>
    </nav>
           
           
           
           
           
           
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 ">
                        <h1 class="d-menu">Menu</h1>
                        <p class="lead">
                            “After a good dinner one can forgive anybody, even one's own relations.”
                            <br> ― Oscar Wilde, A Woman of No Importance
                        </p>

                    </div>
                </div>
            </div>
        </div>


        <div class="menu-section-two">
        
        
                <p style="margin-right:30px ; margin-bottom:80px"class="text-right"><a class=" btn" style="background:#DC4523; color:white;" href="cartpage.php">Order Now</a></p>

          <div class="row">

                <div class="col-md-1">
                </div>


                <div class="col-md-10">
                  <table style="width:1000px;" class="text-center bg-light">
                    <tr>
                      <td><b>S.N</b></td>
                     
                      <td><b>Food Name</b></td>
                      <td><b>Food Image</b></td>
                      <td><b>Price(Tk)</b></td>
                      <td><b>Product Code</b></td>

                    
                    </tr>


                    <?php

                    // Create connection
                    $conn = new mysqli('localhost','root','','website_project');
                    // Check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                  $sql = "SELECT  food, avatar,price,product_code FROM admin";
                  $result = $conn->query($sql);


                  if ($result->num_rows > 0) {
                    $snCount=1;
                          // output data of each row
                          while($row = $result->fetch_assoc()) {?>

                    <tr>
                      <td> <?php echo $snCount;  $snCount++;?> </td>
                 
                      <td> <?php echo $row["food"]; ?> </td>


                      <td class="pt-2 pb-2"><center><img  style="height:70px;width:90px"  src="avatar/<?php echo $row["avatar"]; ?>" alt=""/></center></td>
                      <td> <?php echo $row["price"]; ?> </td>
                      <td> <?php echo $row["product_code"]; ?> </td>



                    </tr>
                         <?php

                         }
                     }
                     $conn->close();
                     ?>

                  </table>

                </div>


                <div class="col-md-1">
                </div>
                </div>
        
          
        
        
        
        
        
        
        
        
        
<!--
            <div class="container pt-4">

                <div class="row text-center text-lg-left">

                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <h3 class="foodname display-4"><a class="foodname" href="">Bao Bun</a></h3>
                        <h4><a class="text-primary" href="">Proin gravida gravida</a> <span class="span">Tk.780</span></h4>
                        <p class="">
                            “Pull up a chair. Take a taste. Come join us. Life is so endlessly delicious.”
                            <br>― Ruth Reichl
                        </p>
                        <hr>

                        <h4><a class="text-primary" href="">Mauris pellentesque</a> <span class="span">Tk.960</span></h4>
                        <p class="">
                            “There is no love sincerer than the love of food.”
                            <br>― George Bernard Shaw, Man and Superman
                        </p>
                        <hr>

                        <h4><a class="text-primary" href="">Libero lacinia</a> <span class="span">Tk.1050</span></h4>
                        <p class="">
                            “I cook with wine, sometimes I even add it to the food.”
                            <br>― W.C. Fields
                        </p>
                        <hr>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <img src="images/dish1.png" class="responsive">
                    </div>
-->



                    <!---------End Menu----------->




                    <br><br>
                    <!--1st photo end-->

<!--

                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <img src="images/dish2.png" class="responsive">
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <h3 class="foodname display-4"><a class="foodname" href="">Woo Bowl</a></h3>
                        <h4><a class="text-primary" href="">Haddi Copta</a> <span class="span">Tk.840</span></h4>
                        <p class="">
                            “You are what what you eat eats.”
                            <br>― Michael Pollan
                        </p>
                        <hr>

                        <h4><a class="text-primary" href="">Millen chaumin</a> <span class="span">Tk.960</span></h4>
                        <p class="">
                            “I am a better person when I have less on my plate.”
                            <br>― Elizabeth Gilbert, Eat, Pray, Love
                        </p>
                        <hr>

                        <h4><a class="text-primary" href="">Libero lactos</a> <span class="span">Tk.1200</span></h4>
                        <p class="">
                            “Eat food. Not too much. Mostly plants.”
                            <br>― Michael Pollan
                        </p>
                        <hr>


                    </div>

                    <br><br>
-->
                    <!--2nd photo end-->


<!--

                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <h3 class="foodname display-4"><a class="foodname" href="">Soup</a></h3>
                        <h4><a class="text-primary" href="">Peaky Soup </a> <span class="span">Tk.980</span></h4>
                        <p class="">
                            “I am not a glutton - I am an explorer of food”
                            <br>― Erma Bombeck
                        </p>
                        <hr>

                        <h4><a class="text-primary" href="">Malvin soup</a> <span class="span">Tk.600</span></h4>
                        <p class="">
                            “How can you govern a country which has 246 varieties of cheese?”
                            <br>― Charles de Gaulle
                        </p>
                        <hr>

                        <h4><a class="text-primary" href="">Blinders Soup</a> <span class="span">Tk.860</span></h4>
                        <p class="">
                            “I hate people who are not serious about meals. It is so shallow of them.”
                            <br>― Oscar Wilde
                        </p>
                        <hr>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <img src="images/dish3.png" class="responsive">
                    </div>



                    <br><br>
-->
                    <!--3rd photo end-->


<!--

                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <img src="images/dish4.png" class="responsive">
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <h3 class="foodname display-4"><a class="foodname" href="">Noodles</a></h3>
                        <h4><a class="text-primary" href="">Maggi Noodles</a> <span class="span">Tk.900</span></h4>
                        <p class="">
                            “Music with dinner is an insult both to the cook and the violinist.”
                            <br>― G. K. Chesterton
                        </p>
                        <hr>

                        <h4><a class="text-primary" href="">Cocola Noodles</a> <span class="span">Tk.670</span></h4>
                        <p class="">
                            “All sorrows are less with bread. ”
                            <br>― Miguel de Cervantes Saavedra
                        </p>
                        <hr>

                        <h4><a class="text-primary" href="">Sojib Noodles</a> <span class="span">Tk.820</span></h4>
                        <p class="">
                            “Tis an ill cook that cannot lick his own fingers.”
                            <br>― William Shakespeare, Romeo and Juliet
                        </p>
                        <hr>


                    </div>

                    <br><br>
-->
                    <!--4th photo end-->
<!--                </div>-->
<!--            </div>-->
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