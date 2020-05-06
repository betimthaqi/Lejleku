<?php
$min = 100;
$max = 2000;

if (!empty($_POST['min_price'])) {
    $min = $_POST['min_price'];
}

if (!empty($_POST['max_price'])) {
    $max = $_POST['max_price'];
}
?>
<div class="box">
    <a href="#" class="btn btn-white btn-animation-1" onclick="myFunction()"><img src="images/filterpng.png" width="40px" height="40px" alt=""></a>
</div>
<div id="demo" style="display: none;">
    <div class="container popuptext" id="myPopup">
        <div class="form-price-range-filter">
            <form id="filter-form" class="filter-form" method="POST">
                <div class="form-group">
                    <input type="" id="min" name="min_price" value="<?php echo $min . "€"; ?>" readonly="readonly">
                    <div id="slider-range"></div>
                    <input type="" id="max" name="max_price" value="<?php echo $max . "€"; ?>" readonly="readonly">
                </div>
                <div class="form-submit">
                    <input type="submit" id="submit" class="submit" value="Filtro" />
                </div>
            </form>
        </div>
    </div>
</div>
<?php
function pricerange($tabela,$faqja)
{
    global $min;
    global $max;
    $conn = new mysqli("185.67.178.114", "durajet2", "2IywPrkXgacX1BRxl0wBgvy7diQ8t01Glm+n0QqG", "durajet2_db");
    $result1 = mysqli_query($conn, "select * from $tabela where product_price BETWEEN '$min' AND '$max'");
    $count = mysqli_num_rows($result1);
    if ($count > 0) {
        while ($row = mysqli_fetch_array($result1)) {
            component($row['product_name'], $row['product_price'], $row['product_image'], $row['id']);
        }
    } else {
        echo "<div class=\"no-result\">Ska rezultate,<a id=\"mbrapa\" href=\"$faqja.php\"> KTHEHU MBRAPA <img src=\"images\kthehumbrapa.png\" width=\"50px\" height=\"50px\" style=\"vertical-align: middle;\"></a></div>";
    }
    mysqli_free_result($result1);
    mysqli_close($conn);
}
?>

<script>
    function myFunction() {
  var x = document.getElementById("demo");
  if (x.style.display === "none") {
    x.style.display = 'block';
  } else {
    x.style.display = 'none';    
  }
}
</script>
<script type="text/javascript">
    $(function() {
        $("#slider-range").slider({
            range: true,
            min: 0,
            max: 2000,
            values: [<?php echo $min; ?>, <?php echo $max; ?>],
            slide: function(event, ui) {
                $("#amount").html("$" + ui.values[0] + " - $" + ui.values[1]);
                $("#min").val(ui.values[0]);
                $("#max").val(ui.values[1]);
            }
        });
        $("#amount").html("$" + $("#slider-range").slider("values", 0) +
            " - $" + $("#slider-range").slider("values", 1));
    });
</script>