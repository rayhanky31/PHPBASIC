<?php

function sum(int $firts, int $second):int {
    $total = $firts+$second;
    return $total;    
}

$result = sum(10,10);
var_dump($result);


$result = sum(100,100);
var_dump($result);

function getFinalValue(int $value):string
{
  if ($value >=80) {
    return "A";
  }else if($value >=70){
    return "B";
  }else if($value >=60){
    return "C";
  }else if($value >=50){
    return "D";
  }else {
    return "E";
  }
  echo "Ups \n";
};

$score = getFinalValue(40);

var_dump($score);




















