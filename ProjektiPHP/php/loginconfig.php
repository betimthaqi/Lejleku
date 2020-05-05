<?php
//lidhja me databaz
define('DB_SERVER', '185.67.178.114:3306');
define('DB_USERNAME', 'durajet2');
define('DB_PASSWORD', '2IywPrkXgacX1BRxl0wBgvy7diQ8t01Glm+n0QqG');
define('DB_NAME', 'durajet2_db');


$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);


if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
