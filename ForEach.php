<?php

// $nam =["Satu","Dua","Tiga"];

// foreach($nam as $name){
//     echo "Halo Ke - ".$name. PHP_EOL;

// }



$person =[
    "first" => "Satu",
    "middle"=> "Dua",
    "last" => "Tiga"
];

foreach($person as $key=>$value){
    echo "$key : $value " . PHP_EOL;   
}