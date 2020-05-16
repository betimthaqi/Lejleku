<?php
function headeri($homepage,$laptopa,$telefona,$aksesor,$karta,$perne){
    echo "<div class=\"wrapper row9\">
    <header id=\"header\" class=\"clear\">
        <div id=\"hgroup\">
            <a href=\"index.php\"><img id=\"logo\" src=\"\" alt=\"\"></a>
            <h1><a href=\"index.php\">Lejleku</a></h1>
            <h2>gaming online shop by gamers</h2>
        </div>
        <div id=\"header-contact\">
            <ul class=\"list none\">
                <li>
                    <form action=\"search.php\" method=\"POST\">
                        <div class=\"search-wrapper\">
                            <div class=\"input-holder\">
                                <input type=\"text\" class=\"search-input\" name=\"search\" placeholder=\"Type to search\" />
                                <button class=\"search-icon\" type=\"submit\" name=\"submit-search\" onclick=\"searchToggle(this, event);\"><span></span></button>
                            </div>
                            <span class=\"close\" onclick=\"searchToggle(this, event);\"></span>
                        </div>
                    </form>
                </li>
                <li><a href=\"cart.php\">
                        <img src=\"./images/shoppingbasket.png\" width=\"65px\" height=\"65px\" alt=\"\">";
                        if (isset($_SESSION['cart'])) {
                            $count = count($_SESSION['cart']);
                            echo "<span id=\"cart_count\">$count</span>";
                        } else {
                            echo "<span id=\"cart_count\">0</span>";
                        }
                        echo "</a></li>
                        <li>";
                        if((!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) && !isset($_SESSION['access_token']))
                        {
                          echo '<a href="login.php"><img id="kyqu" src="images/loginicon.png"
                          height="64" width="64"></a>';
                        }
                        else if(isset($_SESSION['access_token'])){
                            echo '<a href="logout.php"><img src="images/logouticon.png"
                            height="62" width="62"></a>';
                            }
                        else{
                            echo '<a href="login.php"><img src="images/logouticon.png"
                            height="62" width="62"></a>';
                            }
                          echo "</li>
                          </ul>
                      </div>
                  </header>
                  <div class=\"wrapper row2\">
                      <nav id=\"topnav\">
                          <ul class=\"clear\">
                              <li class=\"$homepage\"><a href=\"index.php\">Homepage</a></li>
                              <li class=\"$laptopa\"><a href=\"laptopa.php\">Laptopa</a></li>
                              <li class=\"$telefona\"><a href=\"telefona.php\">Telefona</a></li>
                              <li class=\"$aksesor\"><a href=\"aksesor.php\">Aksesor</a></li>
                              <li class=\"$karta\"><a href=\"cart.php\">Karta</a></li>
                              <li class=\"$perne\"><a href=\"perne.php\">Per ne</a></li>
                          </ul>
                      </nav>
                  </div>
              </div>";
}

?>

<script>
    function searchToggle(obj, evt) {
        var container = $(obj).closest('.search-wrapper');
        if (!container.hasClass('active')) {
            container.addClass('active');
            evt.preventDefault();
        } else if (container.hasClass('active') && $(obj).closest('.input-holder').length == 0) {
            container.removeClass('active');
            // clear input
            container.find('.search-input').val('');
        }
    }
</script>
