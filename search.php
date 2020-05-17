<?php
session_start();
require_once('./php/component.php');
$conn = new mysqli("185.67.178.114", "durajet2", "2IywPrkXgacX1BRxl0wBgvy7diQ8t01Glm+n0QqG", "durajet2_db");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
    <link rel="icon" href="images/logo-bar.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/cart.css">
    <link rel="stylesheet" href="css/layout.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>  
</head>

<body>
<?php require_once("components/header.php");
        headeri("","","","","","");
    ?>
    <div class="article-container">
        <?php
        if (isset($_POST['submit-search'])) {
            $search = mysqli_real_escape_string($conn, $_POST['search']);
            $sql = "SELECT * FROM Allproducts WHERE product_name LIKE '%$search%' ORDER BY product_price DESC";
            $result = mysqli_query($conn, $sql);
            $queryResult = mysqli_num_rows($result);

            if(empty($search)){
                while ($row = mysqli_fetch_assoc($result)) {
                    component($row['product_name'], $row['product_price'], $row['product_image'], $row['id'],$row['product_ofertangjyra'],$row['product_oferta'],$row['product_category'],$row['product_company'],$row['product_description'],$row['product_earlierprice']);
                }
                return;
            }
            echo "<h2 id=\"rezultatet\"> Rezultatet e k&euml;rkimit p&euml;r: \"" . $search . "\"</h2>";
            if ($queryResult > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    component($row['product_name'], $row['product_price'], $row['product_image'], $row['id'],$row['product_ofertangjyra'],$row['product_oferta'],$row['product_category'],$row['product_company'],$row['product_description'],$row['product_earlierprice']);
                }
            } else
            echo "<div class=\"result\" style=\"background: #ddeeff; text-align:center;\"><a id=\"mbrapa\" href=\"index.php\"> KTHEHU NE FILLIM <img src=\"images\kthehumbrapa.png\" width=\"50px\" height=\"50px\" style=\"vertical-align: middle;\"></a></div>";
        }
        ?>
    </div>

    </div>

    <?php require_once("components/footeri.php"); ?>
    <!-- Copyright -->
    <div class="wrapper row5">
        <footer id="copyright" class="clear">
            <p class="fl_left">Copyright &copy; 2020 - All Rights Reserved - <a href="#">Grupi 7</a></p>
            <p class="fl_right">Projekti ne <a target="_blank" href="https://github.com/durajetz/INT19_20_Gr7" title="">Github</a></p>
        </footer>
    </div>
</body>

</html>
