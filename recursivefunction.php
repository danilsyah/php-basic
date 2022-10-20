<?php

// function recursive adalah function yang memanggil function dirinya sendiri

// contoh factorial menggunakan for loop
function factorialLoop(int $value):int{
    $total = 1;
    for ($i = 1; $i <= $value; $i++){
        $total  *= $i;
    }

    return $total;
}

var_dump(factorialLoop(5));


// factorial menggunakan recursive
function factorialRecursive(int $value):int
{
    if($value == 1){
        return 1;
    }else{
        return $value * factorialRecursive($value - 1);
    }
}

var_dump(factorialRecursive(5));
