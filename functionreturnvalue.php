<?php

function sum(int $first, int $last):int{ //mengambalikan nilai function bertipe integer
    return $first + $last;
}

$result = sum(10, 20);
var_dump($result);

function getFinalValue(int $value):string{ //mengambalikan nilai function bertipe string
    if($value >= 80){
        return 'A';
    }else if($value >= 70){
        return 'B';
    }else if($value >= 60){
        return 'C';
    }else{
        return 'Anda tidak lulus'; 
    }
}

$score = getFinalValue(35);
var_dump($score);