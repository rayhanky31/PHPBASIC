<?php

function factorialLoop(int $value) :int {
    $total =1;
    for ($i=1; $i<=$value ; $i++) { 
        $total *=$i;
    }
    return $total;
}
var_dump(factorialLoop(5));



function faktorialRekursive(int $value) :int {
    if ($value == 1) {
        return 1;
    }else{
        return $value * faktorialRekursive($value - 1);
    };  
};

var_dump(faktorialRekursive(6));



function loop(int $value) {
    if ($value==0) {
        echo"End Loop". PHP_EOL;
    }else{
        echo"loop-$value". PHP_EOL;
        loop($value-1);
    }
}
loop(30);