<?php
<<<<<<< Updated upstream
$min = 100;
$max = 2000;
=======
require_once('./php/component.php');
$conn = new mysqli("185.67.178.114", "durajet2", "2IywPrkXgacX1BRxl0wBgvy7diQ8t01Glm+n0QqG", "durajet2_db");

$min = 100;
$max = 5000;
>>>>>>> Stashed changes

if (!empty($_POST['min_price'])) {
    $min = $_POST['min_price'];
}

if (!empty($_POST['max_price'])) {
    $max = $_POST['max_price'];
}
<<<<<<< Updated upstream
=======

$product_ofertaResult = runQuery("SELECT DISTINCT product_oferta FROM Allproducts ORDER BY product_oferta ASC");
function runQuery($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_assoc($result)) {
        $resultset[] = $row;
    }
    if (!empty($resultset))
        return $resultset;
}
>>>>>>> Stashed changes
?>
<div class="box">
    <a href="#" class="btn btn-white btn-animation-1" onclick="myFunction()"><img src="images/filterpng.png" width="40px" height="40px" alt=""></a>
</div>
<div id="demo" style="display: none;">
    <div class="container popuptext" id="myPopup">
        <div class="form-price-range-filter">
<<<<<<< Updated upstream
            <form id="filter-form" class="filter-form" method="POST">
=======
            <form id="filter-form" name="search" class="filter-form" method="POST">
>>>>>>> Stashed changes
                <div class="form-group">
                    <input type="" id="min" name="min_price" value="<?php echo $min . "€"; ?>" readonly="readonly">
                    <div id="slider-range"></div>
                    <input type="" id="max" name="max_price" value="<?php echo $max . "€"; ?>" readonly="readonly">
                </div>
<<<<<<< Updated upstream
=======

                <!-- aabadabdaabagqeqfeqfed -->
                <div class="dropdownlist">
                    <select id="Place" name="product_oferta[]" multiple="multiple">
                        <option value='0'>Zgjedhni produktin:</option>
                        <?php
                        if (!empty($product_ofertaResult)) {
                            foreach ($product_ofertaResult as $key => $value) {
                                echo '<option value="' . $product_ofertaResult[$key]['product_oferta'] . '">' . $product_ofertaResult[$key]['product_oferta'] . '</option>';
                            }
                        }
                        ?>
                    </select>
                </div>
>>>>>>> Stashed changes
                <div class="form-submit">
                    <input type="submit" id="submit" class="submit" value="Filtro" />
                </div>
            </form>
<<<<<<< Updated upstream
=======
            <!-- ashfoafaijfaaj -->
>>>>>>> Stashed changes
        </div>
    </div>
</div>
<?php
<<<<<<< Updated upstream
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
=======
function pricerange($tabela, $faqja)
{
    global $min;
    global $max;
    global $conn;
    
    if (!empty($_POST['product_oferta'])) {
        $i = 0;
        $selectedOptionCount = count($_POST['product_oferta']);
        $selectedOption = "";
        while ($i < $selectedOptionCount) {
            $selectedOption = $selectedOption . "'" . $_POST['product_oferta'][$i] . "'";
            if ($i < $selectedOptionCount - 1) {
                $selectedOption = $selectedOption . ", ";
            }
            $i++;
        }
        $query = "SELECT * from Allproducts WHERE (product_category = '$tabela' and product_price BETWEEN '$min' AND '$max' and product_oferta in (" . $selectedOption . "))";

        $result = runQuery($query);

        if (!empty($result)) {
            foreach ($result as $key => $value) {
                component($result[$key]['product_name'], $result[$key]['product_price'], $result[$key]['product_image'], $result[$key]['id'], $result[$key]['product_ofertangjyra'], $result[$key]['product_oferta'], $result[$key]['product_category'], $result[$key]['product_description'], $result[$key]['product_earlierprice']);
            }
        }
        echo "<div class=\"result\" style=\"background: #ddeeff;\"><a id=\"mbrapa\" href=\"$faqja.php\"> KTHEHU NE FAQE <img src=\"images\kthehumbrapa.png\" width=\"50px\" height=\"50px\" style=\"vertical-align: middle;\"></a></div>";
        return;
    }


    $result1 = mysqli_query($conn, "select * from Allproducts where product_category = '$tabela' AND product_price BETWEEN '$min' AND '$max' ORDER BY product_price DESC");
    $count = mysqli_num_rows($result1);
    if ($count > 0) {
        while ($row = mysqli_fetch_array($result1)) {
            component($row['product_name'], $row['product_price'], $row['product_image'], $row['id'], $row['product_ofertangjyra'], $row['product_oferta'], $row['product_category'], $row['product_description'], $row['product_earlierprice']);
        }
        echo "<div class=\"result\" style=\"background: #ddeeff;\"><a id=\"mbrapa\" href=\"$faqja.php\"> KTHEHU NE FAQE <img src=\"images\kthehumbrapa.png\" width=\"50px\" height=\"50px\" style=\"vertical-align: middle;\"></a></div>";
    } else {
        echo "<div class=\"result\">Ska rezultate,<a id=\"mbrapa\" href=\"$faqja.php\"> KTHEHU MBRAPA <img src=\"images\kthehumbrapa.png\" width=\"50px\" height=\"50px\" style=\"vertical-align: middle;\"></a></div>";
>>>>>>> Stashed changes
    }
    mysqli_free_result($result1);
    mysqli_close($conn);
}
<<<<<<< Updated upstream
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
=======


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
>>>>>>> Stashed changes
</script>
<script type="text/javascript">
    $(function() {
        $("#slider-range").slider({
            range: true,
            min: 0,
<<<<<<< Updated upstream
            max: 2000,
=======
            max: 5000,
>>>>>>> Stashed changes
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