<?php
session_start();

require_once('php/CreateDb.php');
require_once('./php/component.php');


// create instance of Createdb class
$database = new CreateDb();

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/layout.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/cart.css">
    <script src="scripts/jquery.min.js"></script>
    <script src="scripts/jquery-defaultvalue.js"></script>
    <!-- homepage scripts -->
    <script src="scripts/jquery-slides.min.js"></script>
    <script>
        $(function() {
            $('#slider').slides({
                preload: true,
                preloadImage: 'images/slider/controls/loading.gif',
                play: 5000,
                pause: 2500,
                hoverPause: true,
                generatePagination: false
            });
        });
    </script>
    <title>Lejleku</title>
    <link rel="icon" href="images/slider/logo-bar.png" type="image/x-icon">
</head>

<body>
    <?php require_once("components/header.php"); ?>
    <!-- slideri -->
        <div id="container" class="clear">
            <div id="homepage">
                <section id="intro">
                    <h1><em>&ldquo;Always deliver more than expected&bdquo;</em></h1>
                </section>
                <div>
                    <section id="slider">
                        <div id="controls">
                            <a href="#" class="prev"><img src="images/slider/controls/arrow-prev.png" alt="Previous"></a>
                            <a href="#" class="next"><img src="images/slider/controls/arrow-next.png" alt="Next"></a>
                            <div class="slidescontainer">
                                <figure>
                                    <a href="#"><img src="images/slider/oferta.png" width="760" height="320" alt=""></a>
                                </figure>
                                <figure>
                                    <a href="#"><img src="images/slider/security.png" width="760" height="320" alt=""></a>
                                </figure>
                                <figure>
                                    <a href="#"><img src="images/slider/logoja1.png" width="760" height="320" alt=""></a>
                                </figure>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    <!-- sales -->
    <div id="store">
        <h2>Sales of the Month</h2>
        <hr>
        <div class="flex-container items">
            <div class="item">
                <a href="#"><img class="zoom" src="images/iphone11.png" /></a>
                <span>Iphone 11 Pro Max</span>
            </div>
            <div class="item">
                <a href="#"><img class="zoom" src="images/ibuypower.png" /></a>
                <span>Ibuypower Chimera Am5204ei</span>
            </div>
            <div class="item">
                <a href="#"><img class="zoom" src="images/headset.png" /></a>
                <span>Arctis 1 Wireless Gaming Headset </span>
            </div>
            <div class="item">
                <a href="#"><img class="zoom" src="images/legion.png" /></a>
                <span>Lenovo Legion Y7000</span>
            </div>
            <div class="item">
                <a href="#"><img class="zoom" src="images/fold.png" /></a>
                <span>Samsung Galaxy Fold</span>
            </div>
        </div>
    </div>
    <?php require_once("components/footeri.php") ?>
    <!-- Copyright -->
    <div class="wrapper row5">
        <footer id="copyright" class="clear">
            <p class="fl_left">Copyright &copy; 2020 - All Rights Reserved - <a href="#">Grupi 7</a></p>
            <p class="fl_right">Projekti ne <a target="_blank" href="https://github.com/durajetz/INT19_20_Gr7" title="">Github</a></p>
        </footer>
    </div>
<script>
    const input = document.getElementById("search-input");
const searchBtn = document.getElementById("search-btn");

const expand = () => {
  searchBtn.classList.toggle("close");
  input.classList.toggle("square");
};

searchBtn.addEventListener("click", expand);
</script>
</body>

</html>

</html>