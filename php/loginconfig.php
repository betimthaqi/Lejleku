<?php
/*Lidhja me databazen e perbashket*/
$con=mysqli_connect ("185.67.178.114:3306", "durajet2", "2IywPrkXgacX1BRxl0wBgvy7diQ8t01Glm+n0QqG") or die ('Problem ne konektimin me databaz: ' . mysql_error());
mysqli_select_db ($con,'durajet2_db');
?>
