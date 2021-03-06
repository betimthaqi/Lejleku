<?php

session_start();

require_once ("php/CreateDb.php");
require_once ("php/component.php");

$db = new CreateDb();

if (isset($_POST['remove'])){
  if ($_GET['action'] == 'remove'){
      foreach ($_SESSION['cart'] as $key => $value){
          if($value["product_id"] == $_GET['id']){
              unset($_SESSION['cart'][$key]);
              echo "<script>alert('Product has been Removed')</script>";
              echo "<script>window.location = 'cart.php'</script>";
          }
      }
  }
}


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cart</title>
    <link rel="icon" href="images/logo-bar.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/layout.css">
    <link rel="stylesheet" href="css/pricerange.css">
    <link rel="stylesheet" href="css/dropdown.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="css/cartpage.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/cart.css">


    <style>
    @import 'https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300';

/*
 FORMATTING FOR CODEPEN
*/


/*
 BUTTON STYLING
*/

#ch .btn {
  position: relative;
  color: white;
  width: 150px;
  padding: 10px;
  margin: 20px;
  background: rgb(100,108,108);
  background: linear-gradient(0deg, rgba(100,108,108,1) 0%, rgba(38,37,35,1) 100%);
  transition: all 0.3s;
  span {
    transition: all 0.3s;
    tranform: scale(1, 1);
  }
}

.btn::before, .btn::after {
  content: '';
  position: absolute;
  color: white;
  transition: all 0.3s;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 1;
}


/* BTN SIX */
.btn-six::before {

  opacity: 1;
  background: rgba(255, 255, 255, 0.1);
  transform: scale(1.3, 1.3);
}

.btn-six:hover::before {
  opacity: 1;
  transform: scale(1, 1);
}

.btn-six::after {
  color: white;
  transition: all 0.3s;
  border: 1px solid rgba(255, 255, 255, 0.5);
}

.btn-six:hover::after {
  color: white;
  transform: scale(0, 0);
  opacity: 1;
}

    </style>
</head>
<body>

<?php
    require_once ('components/header.php');
    headeri("","","","","five active","");
?>

<div class="container-fluid">
    <div class="row px-5">
        <div class="col-md-7">
            <div class="shopping-cart">
                <h6 id="kartaime">My Cart</h6>
                <hr>
                <?php

                $total = 0;
                    if (isset($_SESSION['cart'])){
                        $product_id = array_column($_SESSION['cart'], 'product_id');

                        $result = $db->getData();
                        while ($row = mysqli_fetch_assoc($result)){
                            foreach ($product_id as $id){
                                if ($row['id'] == $id){
                                    cartElement($row['product_image'], $row['product_name'],$row['product_price'], $row['id']);
                                    $total = $total + (int)$row['product_price'];
                                }
                            }
                        }
                    }else{
                        echo "<h5>Cart is Empty</h5>";
                    }

                ?>

            </div>
        </div>
        <div class="col-md-4 offset-md-1 border rounded mt-5 bg-white h-25">

            <div class="pt-4">
                <h6>PRICE DETAILS</h6>
                <hr>
                <div class="row price-details">
                    <div class="col-md-6">
                        <?php
                            if (isset($_SESSION['cart'])){
                                $count  = count($_SESSION['cart']);
                                echo "<h6 class=\"cmimiperfundimtar\">Price ($count items)</h6>";
                            }else{
                                echo "<h6 class=\"cmimiperfundimtar\">Price (0 items)</h6>";
                            }
                        ?>
                        <h6 class="cmimiperfundimtar">Delivery Charges</h6>
                        <hr>
                        <h6 class="cmimiperfundimtar">Amount Payable</h6>
                    </div>
                    <div class="col-md-6">
                        <h6 class="cmimiperfundimtar">€<?php echo $total; ?></h6>
                        <h6 class="text-success cmimiperfundimtar">FREE</h6>
                        <hr>
                        <h6 class="cmimiperfundimtar">€<?php
                            echo $total;
                            ?></h6>

                          <?php

                          if((!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) && !isset($_SESSION['access_token'])){
                            echo "<a href=\"login.php\"><div class=\"container-6\" id=\"ch\">
                                <div class=\"btn btn-six\">
                                <span>Checkout</span>
                                </div></a>
                                ";
                          }
                          else{
                                    //############################################### Paypal #################################
                                          //test: sb-kyhpr1793693@personal.example.com
                                          //|iD9}=PU
                                      echo   "<div id=\"paypal-button-container\"></div>
                                         <script type=\"text/javascript\"src=\"https://www.paypal.com/sdk/js?client-id=ARLsMoeQH3Hi965jEqNX_mZwG5Mlk_SvWM2Z0hgHx-_pP24LljKlAhJJOoAObkzdTzsGV95oRIrULIMO&currency=EUR\"></script>
                                         <script type=\"text/javascript\">
                                             paypal.Buttons({
                                                 createOrder: function(data, actions) {
                                                     return actions.order.create({
                                                         purchase_units: [{
                                                             amount: {
                                                                 value: '$total'
                                                            }
                                                         }]
                                                     });
                                                 },
                                                 onApprove: function(data, actions) {
                                                     return actions.order.capture().then(function(details) {
                                                         alert('Transaction completed by ' + details.payer.name.given_name + '!');
                                                     });
                                                 }
                                             }).render('#paypal-button-container');
                                         </script>";
                                       }
                                ?>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<?php
    require_once ('components/footeri.php');
?>
<div class="wrapper row5">
        <footer id="copyright" class="clear">
            <p class="fl_left">Copyright &copy; 2020 - All Rights Reserved - <a href="#">Grupi 32</a></p>
            <p class="fl_right">Projekti ne <a target="_blank" href="https://github.com/durajetz/PHP" title="">Github</a></p>
        </footer>
    </div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
