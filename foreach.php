<?php

$names = ["danil","haykal", "fika"];

for($i = 0; $i < count($names); $i++){
    echo "Data ke $i = $names[$i]". PHP_EOL;
}

foreach($names as $index => $name){
    echo "Data ke $index = $name". PHP_EOL;
}

foreach($names as $name){
    echo "Data $name". PHP_EOL;
}

$person = [
    "first_name" => "Danil",
    "middle_name" => "Syah",
    "last_name" => "Arihardjo"
];

foreach($person as $key => $value){
    echo "$key : $value". PHP_EOL;
}