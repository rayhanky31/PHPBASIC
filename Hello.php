<?php 

echo "Hello Word ";

// Tipe Data Number
echo "Decimal : ";
var_dump(1234);


echo "Octal : ";
var_dump(01234);


echo "Hexadecimal : ";
var_dump(0x1A);


echo "Underscore in number : ";
var_dump(1_242_342_21);


//Tipe Data Floatig Point
echo "Floating Point : ";
var_dump(142.22);

echo "Floating Point : ";
var_dump(1.32e3);

echo "Floating Point : ";
var_dump(5e-3);



//Boolean
echo "Benar : ";
var_dump(true);

echo "\n";

//Text String
echo 'Nama : ';
echo  'Badu';

echo "\n";


echo 'Nama : ';
echo  'Tes Aja';


echo "\n \n";

echo <<<TEKS
Ini adalah contoh string yang sangat panjang
dan ini dinamanakan Haredoc
Selmat Mencoba.
TEKS;

echo <<<'TEKS'
Ini adalah contoh string yang sangat panjang
dan ini dinamanakan Nowdoc
Selmat Mencoba, "Cara NowDoc"
Mantap
TEKS;









