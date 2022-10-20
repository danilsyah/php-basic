<?php

/*
    ini adalah function untuk mengambalikan nilai string
    tulisan say hello
*/
function sayHello(string $name): string{
    return "hai nama $name". PHP_EOL;
}

// menampilkan nilai string dengan parameter $nama
echo sayHello("danil");

// value = 92
// output = 11
function solution($value){
    $value = (string)$value;
    echo $value[0]. PHP_EOL;
    echo $value[1]. PHP_EOL;
    $result = (int)$value[0] + (int)$value[1];
    echo $result;
}

solution(92);