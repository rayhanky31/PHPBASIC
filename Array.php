<?php

// $values=array("Satu","Dua","Tiga","Empat","Lima");
// var_dump($values);

// $name = ["Eka","Eko","Eki"];
// var_dump($name[1]);


// //Hapus data array
// unset($name[1]);
// var_dump($name);


// //Menambahakan
// $name[] ="EGA";
// var_dump($name);

// //Mnghitung Jumlah Array
// var_dump(count($name));

//Array Biasa
// $eko = array(
//     "id" =>"Eko",
//     "name" =>"Eko Ajha",
//     "age" =>30,

// );
// var_dump($eko["id"]);


$eko = array(
    "id" =>"Eko",
    "name" =>"Eko Ajha",
    "age" =>30,
    "address" =>[
        "city"=> "Jakarta",
        "country" =>"Indonesia",
    ]
);

var_dump($eko["address"]["city"]);
