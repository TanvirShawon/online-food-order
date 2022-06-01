<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="author" content="Kanish">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Cart</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' />
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' />
  <link rel="stylesheet" href="reg_style.css">
</head>

<body background="avatar/checkout_bg.jpg"style="background-size:cover; background-repeat:no repeat;">
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
                        <a class="nav-link ml-3" href="cartpage.php">Menu</a>
                    </li>
                    <li class="nav-item">
                        <!--					<a class="nav-link active border border-danger border-top-0 border-right-0 border-left-0 ml-3" href="#home">HOME</a>-->
                        <a class="nav-link ml-3" href="offer.php">OFFER</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link ml-3" href="gallery-section.php">GALLERY</a>
                    </li>

                  <li class="nav-item">
                        <a class="nav-link ml-3" href="admin_data.php">ADMIN</a>
                    </li>


   <li class="nav-item">
          <a class="nav-link" href="offer_cart.php" style="margin-left:650px"><i class="fas fa-shopping-cart"></i> <span id="cart-item" class="badge badge-danger"></span></a>
        </li>

                </ul>
            </div>
        </div>
    </nav>
<br>
<br>
<br>
<br>
<br>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-10">
        <div style="display:<?php if (isset($_SESSION['showAlert'])) {
  echo $_SESSION['showAlert'];
} else {
  echo 'none';
} unset($_SESSION['showAlert']); ?>" class="alert alert-success alert-dismissible mt-3">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <strong><?php if (isset($_SESSION['message'])) {
  echo $_SESSION['message'];
} unset($_SESSION['showAlert']); ?></strong>
        </div>
        <div class="table-responsive mt-2">
          <table class="table table-bordered table-striped text-center" style="background:white;">
            <thead>
              <tr>
                <td colspan="7">
                  <h4 class="text-center text-info m-0">Products in your cart!</h4>
                </td>
              </tr>
              <tr>
                <th>ID</th>
                <th>Food Name</th>
                <th>Food Image</th>
                <th>Quantity</th>
                <th>Price</th>

                <th>Total Price</th>
                <th>
                  <a href="action.php?clear=all" class="badge-danger badge p-1" onclick="return confirm('Are you sure want to clear your cart?');"><i class="fas fa-trash"></i>&nbsp;&nbsp;Clear Cart</a>
                </th>
              </tr>
            </thead>
            <tbody>
              <?php
                require 'config.php';
                $stmt = $conn->prepare('SELECT * FROM offer_cart');
                $stmt->execute();
                $result = $stmt->get_result();
                $grand_total = 0;
                while ($row = $result->fetch_assoc()):
              ?>
              <tr>
                <td><?= $row['id'] ?></td>
                <input type="hidden" class="pid" value="<?= $row['id'] ?>">
                 <td><?= $row['food'] ?></td>
                <td><img src="avatar/<?= $row['avatar'] ?>" width="50"></td>
                   <td>
                  <input type="number" class="form-control itemQty" value="<?= $row['qty'] ?>" style="width:75px;">
                </td>
                <td>
                 <p>Tk.&nbsp;&nbsp;<?= number_format($row['price'],2); ?></p>
                </td>
                <input type="hidden" class="pprice" value="<?= $row['price'] ?>">

                <td><p>Tk.&nbsp;&nbsp;<?= number_format($row['total_price'],2); ?> </p></td>
                <td>
                  <a href="action.php?remove=<?= $row['id'] ?>" class="text-danger lead" onclick="return confirm('Are you sure want to remove this item?');"><i class="fas fa-trash-alt"></i></a>
                </td>
              </tr>
              <?php $grand_total += $row['total_price']; ?>
              <?php endwhile; ?>
              <tr>
                <td colspan="3">
                  <a href="cartpage.php" class="btn btn-success"><i class="fas fa-cart-plus"></i>&nbsp;&nbsp;Continue
                    Shopping</a>
                </td>
                <td colspan="2"><b>Grand Total</b></td>
                <td><b><p>Tk.&nbsp;&nbsp;<?= number_format($grand_total,2); ?></p></b></td>
                <td>
                  <a href="checkout.php" class="btn <?= ($grand_total > 1) ? '' : 'disabled'; ?>" style="background:#DC4523;color:white"><i class="far fa-credit-card"></i>&nbsp;&nbsp;Checkout</a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>

  <script type="text/javascript">
  $(document).ready(function() {

    // Change the item quantity
    $(".itemQty").on('change', function() {
      var $el = $(this).closest('tr');

      var pid = $el.find(".pid").val();

        var qty = $el.find(".itemQty").val();
      var pprice = $el.find(".pprice").val();

      location.reload(true);
      $.ajax({
        url: 'action.php',
        method: 'post',
        cache: false,
        data: {
             pid: pid,
          qty: qty,

          pprice: pprice
        },
        success: function(response) {
          console.log(response);
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

</body>

</html>
