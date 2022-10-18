<?php

$data = [
    "action" => "create"
];

// jika variable nya ada dan bernilai makan true , jika nilai nya tidak ada maka false
$action = $data["action"] ?? "Nothing";

echo $action . PHP_EOL;