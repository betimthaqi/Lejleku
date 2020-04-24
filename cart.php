<?php
session_start();

require_once("php/CreateDb.php");
require_once("php/component.php");
$db = new CreateDb();
if (isset($_POST['remove'])) {
    if ($_GET['action'] == 'remove') {
        foreach ($_SESSION['cart'] as $key => $value) {
            if ($value["product_id"] == $_GET['id']) {
                unset($_SESSION['cart'][$key]);
                echo "<script>alert('Product has been removed')</script>";
                echo "<script>window.location = 'cart.php'</script>";
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="stylesheet" href="css/cart.css">
    <link rel="stylesheet" href="css/layout.css">
</head>

<body>
    <?php
    require_once('components/header.php');
    ?>
    <div class="container-carta">
        <div class="carta">
            <?php
            $total = 0;
            if (isset($_SESSION['cart'])) {
                $product_id = array_column($_SESSION['cart'], 'product_id');
                $result = $db->getData();
                while ($row = mysqli_fetch_assoc($result)) {
                    foreach ($product_id as $id) {
                        if ($row['id'] == $id) {
                            cartElement($row['product_image'], $row['product_name'], $row['product_price'], $row['id']);
                            $total = $total + (int) $row['product_price'];
                        }
                    }
                }
            } else {
                echo "<h5>Cart is Empty</h5>";
            }
            ?>
        </div>

        <div class="total-price">
            <h6>price details</h6>
            <hr>
            <?php
            if (isset($_SESSION['cart'])) {
                $count = count($_SESSION['cart']);
                echo "<h6>Price ($count items)</h6>";
            } else {
                echo "<h6>Price (0 items)</h6>";
            }
            ?>
            <h6>Delivery Charges</h6>
            <hr>
            <h6>Amount Payable</h6>
        </div>
        <div class="total-price">
            <?php
            echo $total;
            ?>
        </div>
    </div>
<?php require_once("components/footeri.php")?>
<div class="wrapper row5">
        <footer id="copyright" class="clear">
<<<<<<< HEAD
            <p class="fl_left">Copyright &copy; 2020 - All Rights Reserved hahah- <a href="#">Grupi 7</a></p>
=======
            <p class="fl_left">Copyright &copy; 2020 - All Rights Reserved hahah - <a href="#">Grupi 7</a></p>
>>>>>>> 102e33d90dd8c6d4bd9333211b13ef5593fda998
            <p class="fl_right">Projekti ne <a target="_blank" href="https://github.com/durajetz/INT19_20_Gr7" title="">Github</a></p>
        </footer>
    </div>
   
</body>

</html>