<?php
function component($productname, $productprice, $productimg, $productid, $ngjyra, $oferta, $productcategory, $productcompany, $pershkrimiproduktit, $qmimimehershem)
{
    $element = "    
    <div class=\"product-card\">
<form action=\"#\" method=\"post\">
<div class=\"badge\" style=\"background: $ngjyra;\">$oferta</div>
<div class=\"product-tumb\">
    <img src=\"$productimg\" alt=\"\">
</div>
<div class=\"product-details\">
    <span class=\"product-catagory\">$productcategory,$productcompany</span>
    <h4><a href=\"\">$productname</a></h4>
    <p>$pershkrimiproduktit</p>
    <div class=\"product-bottom-details\">
        <div class=\"product-price\"><small>$qmimimehershem</small>€$productprice</div>
        <div class=\"product-links\">
        <p><button name=\"add\" class=\"button4\" name=\"add\" style=\"background-color:#1f1f1f\"><span>Add to Cart</span></button>
        <input type='hidden' name='product_id' value='$productid'></p>
        </div>
    </div>
</div>
</form>
</div>
    ";
    echo $element;
}

function cartElement($productimg, $productname, $productprice, $productid)
{
    $element = "
    
    <form action=\"cart.php?action=remove&id=$productid\" method=\"post\" class=\"cart-items\">
                    <div class=\"border rounded\">
                        <div class=\"row bg-white\">
                            <div class=\"col-md-3 pl-0\">
                                <img src=$productimg alt=\"Image1\" class=\"img-fluid\">
                            </div>
                            <div class=\"col-md-6\">
                                <h5 id=\"emriproduktit1\" class=\"pt-2\">$productname</h5>
                                <small class=\"text-secondary\">Seller: Lejleku SHPK</small>
                                <h5 class=\"pt-2\">€$productprice</h5>
                            </div>
                            <div class=\"col-md-3 py-5\">
                                <div>
                                <button type=\"submit\" class=\"btn btn-danger mx-2\" name=\"remove\">Remove</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
    
    ";
    echo  $element;
}
