<?php

// $first =[
//     "first_name" => "Khannedy",
// ];
// $last =[
//     "last_name"=> "John",
// ];

// $full = $first+ $last;
// var_dump($full);

$a =[
    "first_name" => "Khannedy",
    "last_name"=> "John",
];
$b =[
    "last_name"=> "John",
    "first_name" => "Khannedy",
];


var_dump($a== $b);//hasilnya true
var_dump($a=== $b);//false karna urutannya tidak sama/ tidak identik