<?php

$sayHello =function(string $name) {
    echo "Hello $name" .PHP_EOL;
};

$sayHello("Eko");
$sayHello("Budi");


function sayGoodbye(string $name,$filter){
 $finalName =$filter($name);
 echo "Good Bye $finalName" .PHP_EOL;   
}

sayGoodbye("Eko",function (string $name) {
    return strtoupper($name); 
});


//Akses varaiabel diluar function anonymous

$firtsName ="Masuk";
$lastName = "Eko";

$sayHelloEko = function() use ( $firtsName, $lastName) {
    echo "Hello $firtsName $lastName". PHP_EOL;
};

$sayHelloEko();
