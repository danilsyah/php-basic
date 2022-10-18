<?php

function foo(){
    echo "foo". PHP_EOL;
}

function bar(){
    echo "bar". PHP_EOL;
}

$functionYangAkanDipanggil = "foo";
$functionYangAkanDipanggil();

$funtionBar = 'bar';
$funtionBar();


function sayHello(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Hello $finalName". PHP_EOL;
}

function sampleFunction(string $name): string{
    return "Sample $name";
}

sayHello("danil", "sampleFunction");
sayHello("danil","strtoupper");
sayHello("Danil", "strtolower");