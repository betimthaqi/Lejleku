<?php
require_once('./php/component.php');
?>

<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <title>Lejleku - Per ne</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/perne.css">
    <link rel="icon" href="images/logo-bar.png" type="image/x-icon">
  </head>
  <body>
      <?php require_once("components/header.php"); ?>
            <!-- #######################################MENYT KRYESORE################################################### -->
            <!-- ########################################################################################## -->
<div>
  <!-- #######################################PERMBAJTJA PREJ QETUHIT################################################### -->
  <!-- ########################################################################################## -->
<div class="wrapper row3">
  <div class="rrethne">
    <h1 class="chap">Rreth Lejleku</h1>

    <p class="par">Kompania e jonë “Lejleku”  &euml;sht&euml; themeluar n&euml; vitin 2003.
      Fillimisht kemi qen të parët që shesim produkte të teknologjisë në Kosovë, me një rrjet të dyqaneve në tërë Kosovën.
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
  për shitje të paisjeve teknologjike dhe zgjerimi i saj i vazhdueshëm, duke vazhduar gjithmon në rritjen
  e cilësisë së produkteve por duke zbritur qmimet vazhdimisht.
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
        <p>I shkath&euml;t e orator, gjithmon i buzeqëshur dhe i hareshëm, ke dëshirë të punosh me të. </p>
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
        <p>Qofse ajo ju buzeqesh nuk mund të dilni nga dyqani pa blerë diqka. Eshtë e gjindshme në situata të sikletshme.</p>
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
        <p>Një kompani si kjo nuk mund të mos kishte njërin nga programerët më të mirë në vend.</p>
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
            <p class="fl_left">Copyright &copy; 2020 - All Rights Reserved - <a href="#">Grupi 7</a></p>
            <p class="fl_right">Projekti ne <a target="_blank" href="https://github.com/durajetz/INT19_20_Gr7" title="">Github</a></p>
        </footer>
    </div>

</body>
</html>
