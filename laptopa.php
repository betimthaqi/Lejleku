<?php
// start sassion
session_start();

require_once('php/CreateDb.php');
require_once('./php/component.php');


// create instance of Createdb class
$database = new CreateDb();

if (isset($_POST['add'])) {
    /// print_r($_POST['product_id']);
    if (isset($_SESSION['cart'])) {

        $item_array_id = array_column($_SESSION['cart'], "product_id");

        if (in_array($_POST['product_id'], $item_array_id)) {
            echo "<script>alert('Product is already added in the cart..!')</script>";
            echo "<script>window.location = 'laptopa.php'</script>";
        } else {

            $count = count($_SESSION['cart']);
            $item_array = array(
                'product_id' => $_POST['product_id']
            );

            $_SESSION['cart'][$count] = $item_array;
        }
    } else {
        $item_array = array(
            'product_id' => $_POST['product_id']
        );

        // Create new session variable
        $_SESSION['cart'][0] = $item_array;
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shoppin cart</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/layout.css">
    <link rel="stylesheet" href="css/cart.css">
    <link rel="stylesheet" href="css/pricerange.css">
    <link rel="stylesheet" href="css/dropdown.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>

<body>
    <?php require_once("components/header.php"); ?>
    <?php require_once("components/pricerange.php");
    pricerange("Laptopa", "laptopa"); // me zgjedh tabelen ncilen po don me ekzekutu queryn per price range
    ?>
    <!-- <div id="laptopa">
        <?php
        $result = $database->getData("Laptopa");
        while ($row = mysqli_fetch_assoc($result)) {
            component($row['product_name'], $row['product_price'], $row['product_image'], $row['id'], $row['product_ofertangjyra'], $row['product_oferta'], $row['product_category'], $row['product_description'], $row['product_earlierprice']);
        }
        ?>
    </div> -->
    <?php require_once("components/footeri.php"); ?>

    <!-- Copyright -->
    <div class="wrapper row5">
        <footer id="copyright" class="clear">
            <p class="fl_left">Copyright &copy; 2020 - All Rights Reserved - <a href="#">Grupi 7</a></p>
            <p class="fl_right">Projekti ne <a target="_blank" href="https://github.com/durajetz/PHP" title="">Github</a></p>
        </footer>
    </div>
</body>

</html>
