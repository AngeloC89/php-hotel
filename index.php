<?php


include __DIR__ ."/Controllers/hotelsMethods.php";
$template = printTable($data);
//var_dump($data);


include __DIR__ . "/Views/header.php";
?>


<?php
include __DIR__ . "/Views/main.php";
?>