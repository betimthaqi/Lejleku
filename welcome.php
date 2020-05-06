<?php

session_start();
require_once('./php/component.php');


if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="css/layout.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/cart.css">
    <link rel="stylesheet" href="css/pricerange.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>

  <?php
  // per headerin
  require_once("components/header.php");
  ?>
      <div style="margin: 50px 0px;">
      <div class="page-header">
        <h1 style="font-size: 50px">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Mireserdhe ne webfaqen tone.</h1>
    </div>
    <p style="padding: 25px">
        <a href="index.php" id="logout_btn" style="background-color: green;">Shko te Homepage</a>
        <a href="logout.php" id="logout_btn">Shkyqu</a>

    </p>
  </div>
    <?php
    // per headerin
    require_once("components/footeri.php");
    ?>

</body>
</html>
