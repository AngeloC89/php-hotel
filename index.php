<?php

// Controllo se l'utente ha effettuato il login
session_start();
if (!isset($_SESSION['userId'])) {
  session_destroy();
  header('Location: login.php');
  die();
};


include __DIR__ ."/Controllers/hotelsMethods.php";
$template = printTable($data);
//var_dump($data);


include __DIR__ . "/Views/header.php";
?>
<?php
include __DIR__ . "/Views/main.php";
?> 

