<?php

// scope variabel adalah dibagian mana saja sebuah variabel bisa diakses.
// PHP memiliki 3 scope :
// 1. global
// 2. local
// 3. static

$name = "danil"; //global scope
$address = "sumedang";

function sayHello(){
    // global $name, $address; // global keyword
    // echo $name .PHP_EOL; error

    $firstName = "danil syah"; //local variable, hanya bisa di akses di dalam function

    echo $GLOBALS["name"] .PHP_EOL; // $GLOBAL variable
    echo $GLOBALS["address"]. PHP_EOL;
    // echo $address;
}

sayHello();

// echo $firstName; // error


// variable static
function increment(){
    static $counter = 1;
    echo "Counter = $counter". PHP_EOL;

    $counter++;
}

increment();
increment();
increment();
increment();
increment();