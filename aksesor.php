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
<div>
</html>
