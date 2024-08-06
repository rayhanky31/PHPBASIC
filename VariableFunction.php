<?php

function foo() {
    echo"Foo".PHP_EOL;
}

function bar() {
    echo"Bar".PHP_EOL;
}

$functiomYgPanggil ="foo";
$functiomYgPanggil();

$functiomYgPanggil ="bar";
$functiomYgPanggil();


//contoh
function sayHello(string $name, $filter){
    $finalName=$filter($name);
    echo "hello $finalName".PHP_EOL;
    
}

function sampleFunction(string $name) {
    return"Sample $name".PHP_EOL;
    
}

//si Upper akan dimasukan ke var filter
sayHello("Rayhan","strtoupper");

sayHello("Rayhan","strtolower");

sayHello("Rayhan","sampleFunction");


//

