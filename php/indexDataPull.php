<?php
// caroussel : nomPoster => video
 $caroussel = [
    "img-1.png" => "RickRolled.webm",
    "img-2.png" => "RickRolled.webm",
    "img-3.png" => "RickRolled.webm",
    "img-4.png" => "RickRolled.webm",
    "img-5.png" => "RickRolled.webm",
    "img-6.png" => "RickRolled.webm",
    "img-7.png" => "RickRolled.webm",
    "img-8.png" => "RickRolled.webm",
    "img-9.png" => "RickRolled.webm",
    "img-10.png" => "RickRolled.webm",
 ];

 $affiche =[
    "testAffiche.jpeg",
    "testAffiche2.jpeg",
    "testAffiche.jpeg",
    "testAffiche2.jpeg",
    "testAffiche.jpeg",
    "testAffiche2.jpeg",
    "testAffiche.jpeg",
    "testAffiche.jpeg",
    "testAffiche2.jpeg",
    "testAffiche2.jpeg",
    "testAffiche.jpeg",
    "testAffiche.jpeg",
    "testAffiche2.jpeg",
    "testAffiche.jpeg",
    "testAffiche2.jpeg"    
 ];

$fame = [
    "The Matrix" => [ "affiche/testAffiche.jpeg" => 8.7],
    "Star Wars: Épisode IV - Un nouvel espoir" => [ "affiche/testAffiche2.jpeg" => 8.6],
    "La Ligne Verte" => [ "affiche/testAffiche.jpeg" => 8.6],
    "Le Seigneur des anneaux : Les Deux Tours" => [ "affiche/testAffiche.jpeg" => 8.8],
    "Il faut sauver le soldat Ryan" => [ "affiche/testAffiche.jpeg" => 8.6],
];

$shame = [
    "Le fils du mask" => [ "affiche/testAffiche.jpeg" => 2.3],
    "House of the Dead" => [ "affiche/testAffiche2.jpeg" => 2.1],
    "Troll II" => [ "affiche/testAffiche.jpeg" => 3.0],
    "Winnie-the-Pooh: Blood and Honey" => [ "affiche/testAffiche.jpeg" => 2.9],
    "Mortal kombat: Destruction finale" => [ "affiche/testAffiche.jpeg" => 3.6],
];

 function prepareNotes($movies){
    $res=[];
    foreach($movies as $title => $poster){
        foreach($poster as $img => $note){
           array_push($res, "<div class=\"note\"><img src=\"img/".$img."\"><p>" . $note . "/10</p><h3>" . $title . "</h3></div>");
        }    
    }
    return $res;
 }
