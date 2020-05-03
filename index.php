<?php
session_start();

require_once('php/CreateDb.php');
require_once('./php/component.php');
require 'php/loginconfig.php';


// create instance of Createdb class
$database = new CreateDb();

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/layout.css">
    <link rel="stylesheet" href="css/style.css">
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
    <?php
    // per headerin
    require_once("components/header.php");
    ?>

<?php
//per login form

if(isset($_POST['login']))
{
  $username=$_POST['username'];
  $password=$_POST['password'];

  $query="select * from user WHERE username='$username' AND password='$password'";

  $query_run = mysqli_query($con,$query);
  if(mysqli_num_rows($query_run)>0)
  {
    $_SESSION['username']= $username;

  }
  else
  {
    echo '<script type="text/javascript"> alert("Perdoruesi nuk ekziston") </script>';
    header('location:login.php?PerdoruesiNukEkziston');
  }
}
?>
<?php // mesazhi ne fillim qofse je i loguar
if(isset($_POST['login'])){
echo '<h1 style="text-align: center; text-shadow: 2px 2px 5px #CB9530;"> Mireserdhet ne platformen tone, ';
echo $username;
echo '</h1>';
}
else {
echo '<h1 style="text-align: center; text-shadow: 2px 2px 5px #CB9530;"> Pershendetje, ju lutemi te kyqeni ne platformen tone per sherbime me te avancuara </h1>';
}
?>
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

</body>

</html>

</html>
