<?php





$firtsName = "Masuk";
$lastName = "Eko";
//Anonymous
//Akses varaiabel diluar function anonymous

$sayHelloAno = function() use ( $firtsName, $lastName) {
    echo "Hello $firtsName $lastName". PHP_EOL;
};
//Arrow
$sayHelloEko =fn()=>"Hello $firtsName $lastName".PHP_EOL;

echo $sayHelloAno();
echo $sayHelloEko();