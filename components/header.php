<div class="wrapper row9">
    <header id="header" class="clear">
        <div id="hgroup">
            <a href="index.php"><img id="logo" src="" alt=""></a>
            <h1><a href="index.php">Lejleku</a></h1>
            <h2>Get your product everywhere for free</h2>
        </div>
        <div id="header-contact">
            <ul class="list none">
                <li>Search bar</li>
                <li><a href="cart.php">
                        <img src="./images/shoppingbasket.png" width="50px" height="50px" alt="">
                        <?php
                        if (isset($_SESSION['cart'])) {
                            $count = count($_SESSION['cart']);
                            echo "<span id=\"cart_count\">$count</span>";
                        } else {
                            echo "<span id=\"cart_count\">0</span>";
                        }
                        ?>
                    </a></li>
                <li><a href="login.php"><button class="kyq" style="	margin-top:10px;
                	color: white;
                	margin-bottom:15px;
                  padding: 10px 25px;
                  background-color: #CB9530;"> Kyçu </button></a></li>
            </ul>
        </div>
        <!-- menyt kryesore -->
    </header>
    <div class="wrapper row2">
        <nav id="topnav">
            <ul class="clear">
                <li class="first active"><a href="index.php">Homepage</a></li>
                <li ><a href="laptopa.php">Laptopa</a></li>
                <li><a href="cart.php">Karta</a></li>
                <li><a href="perne.php">Per ne</a></li>
            </ul>
        </nav>
    </div>
</div>
