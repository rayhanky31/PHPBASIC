<?php

$name ="Nama";
function sayHello() {
    global $name;
    echo "Tes $name".PHP_EOL;
}

sayHello();