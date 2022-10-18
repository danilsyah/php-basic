<?php

// variabel = sifatnya mutable artinya bisa diubah
// constant = sifatnya immutable artinya tidak bisa diubah

$firstName = "danil";
$lastName = "syah";
$age = 30;
$isMarried = True;
echo $firstName ," ",$lastName, " umur saya : ", $age, " Menikah : ", $isMarried;
echo "\n";

// variable variables
$contoh = "danil";
$$contoh = "syah";

echo "contoh : ";
echo $contoh;
echo "\n";

echo "danil : ";
echo $danil;

