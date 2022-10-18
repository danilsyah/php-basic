<?php

$first = [
    "first_name" => "danil"
];

$last = [
    "first_name" => "haykal",
    "last_name" => "dafiansyah"
];

$full = $first + $last;
var_dump($full);

$full2 = $last + $first;
var_dump($full2);


$a = [
    "first_name" => "danil",
    "last_name" => "syah"
];

$b = [
    "last_name" => "syah",
    "first_name" => "danil"
];

var_dump($a == $b);
var_dump($a === $b);
