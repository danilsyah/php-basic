<?php

$name = "Test belajar PHP";

echo "Name : ". $name . PHP_EOL;
echo "Value : ". 100 . PHP_EOL;

// konversi integer to string
$valueString = (string)100;
var_dump($valueString);

// konversi string to integer
$valueInt = (int)"1000";
var_dump($valueInt);

// konversi string to float
$valueFloat = (float)"123.4";
var_dump($valueFloat);

// konversi float to string
$valueFloatToString = (string)20.12;
var_dump($valueFloatToString);

$name = "DANIL";
echo $name[0]. PHP_EOL;
echo $name[1]. PHP_EOL;

echo "Hello" . $name . " selamat belajar PHP". PHP_EOL;
echo "Hello $name, semangat belajar PHP". PHP_EOL;

$var = "Haykal";
echo "My Boy is {$var}s". PHP_EOL;