<?php

$hotels = [

    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 0.7
    ],
    [
        'name' => 'Hotel VillaRomana',
        'description' => 'Hotel VillaRomana Descrizione',
        'parking' => false,
        'vote' => 8,
        'distance_to_center' => 6
    ],
    [
        'name' => 'Hotel  Inn Milano',
        'description' => 'Hotel Inn Milano Descrizione',
        'parking' => true,
        'vote' => 9,
        'distance_to_center' => 5.6
    ],

];

//this is the conditions to get array filtered
function getHotelData($hotel)
{      
     $arrayF = $hotel;
    if (!empty($_GET['parking']) || !empty($_GET['vote'])) {
        $parking = $_GET['parking'];
        $vote = $_GET['vote'];
        $arrayF = array_filter($hotel, function ($key) use ($parking) {
            return $key['parking'] == $parking || $parking == "all";
        });
        $arrayF = array_filter($arrayF, function ($key) use ($vote) {
            return $key['vote'] >= $vote || $vote == "all";
        });
   
    }

    return $arrayF;
}
