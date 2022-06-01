<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="author" content="Sahil Kumar">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Shopping Cart System</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' />
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' />
  <link rel="stylesheet" href="reg_style.css">
</head>

<body>
  <!-- Navbar start -->
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





<!--
                  <li class="nav-item">
                        <a class="nav-link ml-3" href="admin_data.php">ADMIN</a>
                    </li>
-->


   <li class="nav-item">
          <a class="nav-link" href="cart.php" style="padding-left:755px"><i class="fas fa-shopping-cart"></i> <span id="cart-item" class="badge badge-danger"></span></a>
        </li>

                </ul>
            </div>
        </div>
    </nav>
  <!-- Navbar end -->

  <!-- Displaying Products Start -->
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>


    <p style="margin-right:50px ; margin-bottom:50px"class="text-right"><a class=" btn" style="background:#DC4523; color:white;" href="cart.php">Check your cart</a></p>







  <div class="container">
    <div id="message"></div>
    <div class="row mt-2 pb-3">
      <?php
  			include 'config.php';
  			$stmt = $conn->prepare('SELECT * FROM admin');
  			$stmt->execute();
  			$result = $stmt->get_result();
  			while ($row = $result->fetch_assoc()):
  		?>
      <div class="col-sm-6 col-md-4 col-lg-3 mb-2">
        <div class="card-deck">
          <div class="card p-2 border-secondary mb-2">
            <img src="avatar/<?= $row['avatar'] ?>" class="card-img-top" height="250">
            <div class="card-body p-1">
              <h4 class="card-title text-center text-info"><?= $row['food'] ?></h4>
              <h5 class="card-text text-center text-danger"><p>Tk.&nbsp;&nbsp;<?= number_format($row['price'],2) ?>/-</p></h5>

            </div>
            <div class="card-footer p-1">
              <form action="" class="form-submit">
                <div class="row p-2">
                  <div class="col-md-6 py-1 pl-4">
                    <b>Quantity : </b>
                  </div>
                  <div class="col-md-6">
                    <input type="number" min="1" class="form-control pqty" value="<?= $row['qty'] ?>">
                  </div>
                </div>
                <input type="hidden" class="pid" value="<?= $row['id'] ?>">
                <input type="hidden" class="pname" value="<?= $row['food'] ?>">
                <input type="hidden" class="pprice" value="<?= $row['price'] ?>">
                <input type="hidden" class="pimage" value="<?= $row['avatar'] ?>">
                <input type="hidden" class="pcode" value="<?= $row['product_code'] ?>">
                <button class="btn  btn-block addItemBtn" style="background:#DC4523;color:white" ><i class="fas fa-cart-plus"></i>&nbsp;&nbsp;Add to
                  cart</button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <?php endwhile; ?>
    </div>
  </div>
  <!-- Displaying Products End -->

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>

  <script type="text/javascript">
  $(document).ready(function() {

    // Send product details in the server
    $(".addItemBtn").click(function(e) {
      e.preventDefault();
      var $form = $(this).closest(".form-submit");
      var pid = $form.find(".pid").val();
      var pname = $form.find(".pname").val();
      var pprice = $form.find(".pprice").val();
      var pimage = $form.find(".pimage").val();
      var pcode = $form.find(".pcode").val();

      var pqty = $form.find(".pqty").val();

      $.ajax({
        url: 'action.php',
        method: 'post',
        data: {
          pid: pid,
          pname: pname,
          pprice: pprice,
          pqty: pqty,
          pimage: pimage,
          pcode: pcode
        },
        success: function(response) {
          $("#message").html(response);
          window.scrollTo(0, 0);
          load_cart_item_number();
        }
      });
    });

    // Load total no.of items added in the cart and display in the navbar
    load_cart_item_number();

    function load_cart_item_number() {
      $.ajax({
        url: 'action.php',
        method: 'get',
        data: {
          cartItem: "cart_item"
        },
        success: function(response) {
          $("#cart-item").html(response);
        }
      });
    }
  });
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
