<?php

// $nilai =19;
// $absen =90;

// if($nilai >=80 && $absen>=80){
//     echo"Nilai A" . PHP_EOL;
// }else if ($nilai >=70 && $absen>=70) {
//     echo"Nilai B" . PHP_EOL;
// }else if ($nilai >=60 && $absen>=60) {
//     echo"Nilai C" . PHP_EOL;
// }else if ($nilai >=50 && $absen>=50) {
//     echo"Nilai D" . PHP_EOL;
// }else {
//     echo "Nilai E" . PHP_EOL;
// };


//Alternatif

$absen =90;

if($nilai >=80 && $absen>=80):
    echo"Nilai A" . PHP_EOL;
elseif ($nilai >=70 && $absen>=70):
    echo"Nilai B" . PHP_EOL;
elseif ($nilai >=60 && $absen>=60) :
    echo"Nilai C" . PHP_EOL;
elseif ($nilai >=50 && $absen>=50) :
    echo"Nilai D" . PHP_EOL;
else :
    echo "Nilai E" . PHP_EOL;
endif;

