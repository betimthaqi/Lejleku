<?php
session_start();

require_once('php/CreateDb.php');
require_once('./php/component.php');

$database = new CreateDb();
?>

<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <title>Lejleku - Per ne</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/layout.css">
    <link rel="stylesheet" href="css/cart.css">
    <link rel="stylesheet" href="css/pricerange.css">
    <link rel="icon" href="images/logo-bar.png" type="image/x-icon">
  </head>
  <body>
      <?php require_once("components/header.php"); ?>
      <?php require_once("components/pricerange.php");

      ?>
    

          <?php require_once("components/footeri.php") ?>

<?php require_once("components/footeri.php")?>
<div class="wrapper row5">
        <footer id="copyright" class="clear">
            <p class="fl_left">Copyright &copy; 2020 - All Rights Reserved hahah- <a href="#">Grupi 7</a></p>
            <p class="fl_right">Projekti ne <a target="_blank" href="https://github.com/durajetz/PHP" title="">Github</a></p>
        </footer>
    </div>
	</body>
</html>
