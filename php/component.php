<?php
function component($productname, $productprice, $productimg, $productid)
{
    $element = "    
    <div class=\"product-card\">
<form action=\"laptopa.php\" method=\"post\">
<div class=\"badge\">Hot</div>
<div class=\"product-tumb\">
    <img src=\"$productimg\" alt=\"\">
</div>
<div class=\"product-details\">
    <span class=\"product-catagory\">Women,bag</span>
    <h4><a href=\"\">$productname</a></h4>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, possimus nostrum!</p>
    <div class=\"product-bottom-details\">
        <div class=\"product-price\"><small>$96.00</small>$$productprice</div>
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



function cartElement($productimg,$productname,$productprice,$productid){
    $element = "
    <form action=\"cart.php?action=remove&id=$productid\" method=\"post\" class=\"car-items\">
    
	<div class=\"borderifotos\">
        <img src=\"$productimg\" width=\"200px\" height=\"200px\" alt=\"\">        
    </div>
<div class=\"emri\">
        <h5>$productname</h5><hr>
        <small>Seller: Lejleku Shpk</small></div>
		<div class=\"bcmimi\">
        <h5>$productprice</h5>

       <div class=\"remove\"> <button type=\"submit\" name=\"remove\">Remove</button></div>
</div>
    <div class=\"qmimet\">
	
	
<div class=\"ndrro\">
<form>
  <div class=\"value-button\" id=\"decrease\" onclick=\"decreaseValue()\" value=\"Decrease Value\">-</div>
  <input type=\"number\" id=\"number\" value=\"0\"/>
  <div class=\"value-button\" id=\"increase\" onclick=\"increaseValue()\" value=\"Increase Value\">+</div>
</div>
</div>
    
	</div>

</form>
    ";
    echo $element;
}

