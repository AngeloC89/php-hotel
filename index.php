<?php
include __DIR__ . "/Models/hotels.php";
// var_dump($hotels);

if (!empty($_GET['parking']) || (isset($_GET['parking']) && $_GET['parking'] == 0)) {
  $select = $_GET['parking'];
  $newArray = array_filter($hotels, function ($key) use ($select) {
    return $key['parking'] == $select || $select == "all";
  });
} else {
  $newArray = $hotels;
}




include __DIR__ . "/Views/header.php";
?>


<?php
include __DIR__ . "/Views/main.php";
?>