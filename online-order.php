
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
 
    <section id="online-order">
        <div class="order-section-one">
           
           
           
           
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
                        <a class="nav-link ml-3" href="reg-section.php">SIGN IN</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link ml-3" href="about.php">ABOUT US</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link ml-3" href="menu-section.php">MENU</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ml-3" href="gallery-section.php">GALLERY</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ml-3" href="contact.php">CONTACT US</a>
                    </li>

<!--
                    <li class="nav-item">
                        <a class="nav-link ml-3" href="#reg">REGISTRATION</a>
                    </li>
-->
                   
                </ul>
            </div>

        </div>
    </nav>
           
           
           
           
           
            <p style="font-size: 50px;text-align: center; color: #DE4623;font-family: 'Raleway', sans-serif; font-weight: 900;">During this Pandemic Order Online</p>
            <button class="btn text-center btn-block" data-target="#modal-button" data-toggle="modal" style="color: #ffffff;font-size: 20px;font-family: 'Raleway', sans-serif; font-weight: 700;">Click Here to Order</button>
            <div class="modal" id="modal-button">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3 class="modal-title" style="color: #fff;">Order Online</h3>
                            <button class="close text-dark" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <form class="text-left">
                                <div class="form-group">
                                    <label style="color: #fff;">Name</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label style="color: #fff;">Phone Number</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label style="color: #fff;">Address</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label style="color: #fff;">Food Name</label>
<!--
                                    <select name="" id="" class="form-control">
                                        <option  value="food">Proin gravida gravida</option>
                                        <option  value="food1">Mauris pellentesque</option>
                                    </select>
-->
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label style="color: #fff;">Food Item</label>
                                    <input type="number" class="form-control">
                                </div>
                                <button class="btn btn-dark">Send</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>