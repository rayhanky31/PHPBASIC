<?php

// function sayHello($name){
//     echo "Hello $name";
    
// }

// sayHello("Eko");


//Default Argunet value
// function sayHello($name="Anonim"){
//     echo "Hello $name";
    
// }
// sayHello();



// function sum(int $firts,int $last ) {
//     $total = $firts+$last;
//       echo "Total $firts+$last= $total". PHP_EOL;
// }

// sum(100,100);

// sum("100","100"); 



//Opsi
// function sumAll(array $values) {
//     $total = 0;
//     foreach($values as $value){
//         $total +=$value;
//     }
//     echo "Total". implode(",",$values). " =$total " . PHP_EOL;
// }

// sumAll([1,2,31,3,6]);

//Alternatif
function sumAll(...$values) {
    $total = 0;
    foreach($values as $value){
        $total +=$value;
    }
    echo "Total". implode(",",$values). " =$total " . PHP_EOL;
}


$budi =[1,2,3,4,5];

sumAll(1,2,31,3,6);
sumAll(...$budi);







