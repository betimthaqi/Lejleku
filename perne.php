<?php
session_start();
require_once('./php/component.php');
?>

<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <title>Lejleku - Per ne</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/perne.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/layout.css">
    <link rel="stylesheet" href="css/cart.css">
    <link rel="stylesheet" href="css/pricerange.css">
    <link rel="icon" href="images/logo-bar.png" type="image/x-icon">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  </head>
  <body>
      <?php require_once("components/header.php");
      headeri("","","","","","six active");
      ?>

<div>
<div>
  <div class="rrethne">
    <h1 class="chap">Rreth Lejleku</h1>

    <p class="par">Kompania e jonë “Lejleku”  &euml;sht&euml; themeluar n&euml; vitin 2003.
      Fillimisht kemi qenë të parët që shesim produkte të teknologjisë në Kosovë, me një rrjet të dyqaneve në tërë Kosovën.
      Që nga viti 2009 jemi të parët të cilet shesim edhe online, më një konkurenc zero nga të tjerët.</p>
</div>

<div class="rrethne oo">
<h1 class="chap">Misioni</h1>
<p class="par">Misioni i Lejlekut është të shtrihet edhe ndërkombëtarisht,
  duke mos munguar cilësia dhe shpejtësia në dërgimin e produkteve,
  duke plotësuar kërkesat dhe shtuar rahatinë e klientëve gjithmonë në pajtim me
   Ligjet e aplikueshme në Kosovë dhe praktikat ndërkombëtare.</p></td>
</div>

<div class="rrethne oo">
<h1 class="chap">Vizioni</h1>
<p class="par">Vizioni i Lejlekut është qëndrimi në tregun e Kosoves si lider dhe pakonkurencë
  për shitje të paisjeve teknologjike dhe zgjerimi i saj i vazhdueshëm, duke vazhduar gjithmonë në rritjen
  e cilësisë së produkteve me cmimet volitshme.
  </p>
</div>
</div>

<section class="staff">
<div>
  <div class="column">
    <div class="card">
      <img src="images/guard.png" alt="emri" style="width:100%">
      <div class="containercard">
        <h2> Dren Gashi </h2>
        <p class="title"> Drejtor </p>
<p>Potencial krijues dhe punues,i përqendruar në dhënien impulseve kualitative dhe kreative, në ndërtimin avancues të kapaciteteve profesionale të organizimit.</p>

        <p><button class="button"><a href="mailto:dreni-shqiptar@gmail.com">Contact</a></button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="images/guard2.png" alt="emri" style="width:100%">
      <div class="containercard">
        <h2>Nimete Dautaj</h2>
        <p class="title">Shitese</p>
<p>Ne frymëzojmë, mbështesim, udhëzojmë dhe kemi mundësinë që të zbulojmë dhe ndajmë disa nga paisjet më të mira në vend. Asnjëherë mungesë pozitiviteti.</p>

      <p><button class="button"><a href="mailto:nimeti_3nt@postribe.com">Contact</a></button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="images/guard3.png" alt="emri" style="width:100%">
      <div class="containercard">
        <h2>Blond Muzaka</h2>
        <p class="title">Programer</p>
        <p>Një kompani si kjo nuk mund të mos kishte njërin nga programerët më të mirë në vend.
Kur nuk krijoni gjëra, ju bëheni më të përcaktuar nga shijet tuaja sesa nga aftësia.</p>
        <p><button class="button"><a href="mailto:messi.1993@live.com">Contact</a></button></p>
      </div>
    </div>
  </div>
</div>
</section>

<!-- ####################################### Contant Form ################################################### -->
<div class="contactform">
  <form action="contactform.php" method="post">
    <h1 style="font-size:2.3em; text-align:center; padding: 20px 0px;"> Dërgo një mesazh </h1>
    <label for="fname">Emri</label>
    <input type="text" id="fname" name="firstname" placeholder="Emri juaj.." required>

    <label for="lname">Mbiemri</label>
    <input type="text" id="lname" name="lastname" placeholder="Mbiemri juaj.." required>

    <label for="email">Email </label>
    <input type="email" id="email" name="email" placeholder="Shenoni emailin tuaj.." required>

    <label for="subject">Përshkrimi</label>
    <textarea id="subject" name="subject" placeholder="Shkruaj diqka.." style="height:200px" required></textarea>

    <button name="sumbit"> Dergo </button>

  </form>
</div>

<!-- ####################################### Lokacioni ################################################### -->
<div id="map"><h1 style="font-size:2.3em; text-align:center; padding: 20px 0px;"> Lokacioni </h1>
<p> <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2934.6017021294774!2d21.164952514970587!3d42.64860307482389!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13549ec1b6ecb2c1%3A0x7f0893730efce187!2sFakulteti%20Teknik!5e0!3m2!1ssq!2s!4v1586387163979!5m2!1ssq!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe> </p>
</div>
<!-- ####################################### Footeri  ################################################### -->
    <?php require_once("components/footeri.php") ?>
    <!-- Copyright -->
    <div class="wrapper row5">
        <footer id="copyright" class="clear">
            <p class="fl_left">Copyright &copy; 2020 - All Rights Reserved - <a href="#">Grupi 33</a></p>
            <p class="fl_right">Projekti ne <a target="_blank" href="https://github.com/durajetz/PHP" title="">Github</a></p>
        </footer>
    </div>

</body>
</html>
