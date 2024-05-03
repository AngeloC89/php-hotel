<?php
include __DIR__ . "/../Models/hotels.php";

function printTable($data)
{

    //this forEach is for print the hotels
    $template = "";
    foreach ($data as $key) {
        $template .= "<tr> <td>{$key['name']}</td> <td>{$key['description']}</td> <td>{$key['parking']}</td> <td>{$key['vote']}</td> <td>{$key['distance_to_center']}</td> </tr>";
    }
    return $template;
};

$data = getHotelData($hotels);