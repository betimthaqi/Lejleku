<?php

session_start();
require_once('./php/component.php');


if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="icon" href="images/logo-bar.png" type="image/x-icon">
    <link rel="stylesheet" href="css/layout.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/cart.css">
    <link rel="stylesheet" href="css/pricerange.css">
    <link rel="stylesheet" href="css/welcome.css">
</head>

<body>

    <?php
    // per headerin
    require_once("components/header.php");
    headeri("","","","","","");
    ?>

    <section class="banner">
        <h1 style="font-size: 50px">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Mireserdhe ne webfaqen tone.</h1>
        <p id="about">Lejleku is here to fulfill your wishes!!!</p>
        <a href="index.php" id="logout_btn" class="btn-bgstroke">Homepage</a>
        <a href="logout.php" id="logout_btn" class="btn-bgstroke">Shkyqu</a>
    </section>
    <?php
    // per headerin
    require_once("components/footeri.php");
    ?>
  <div class="wrapper row5">
        <footer id="copyright" class="clear">
            <p class="fl_left">Copyright &copy; 2020 - All Rights Reserved - <a href="#">Grupi 7</a></p>
            <p class="fl_right">Projekti ne <a target="_blank" href="https://github.com/durajetz/PHP" title="">Github</a></p>
        </footer>
    </div>
</body>

</html>
