<?php
include __DIR__ . "/Models/hotels.php";
// var_dump($hotels);

//this is the conditions to filter
if (!empty($_GET['parking']) || !empty($_GET['vote'])) {
  $parking = $_GET['parking'];
  $vote = $_GET['vote'];
  $arrayF = array_filter($hotels, function ($key) use ($parking) {
    return $key['parking'] == $parking || $parking == "all";
  });
  $arrayF = array_filter($arrayF, function ($key) use ($vote) {
    return $key['vote'] >= $vote || $vote == "all";
  });
} else {
  $arrayF = $hotels;
}


include __DIR__ . "/Views/header.php";
?>


<?php
include __DIR__ . "/Views/main.php";
?>