<?php
$values = array(10,2,4,3,6,2.44);
var_dump($values);

$names = ["danil", "haykal", "fika"];
var_dump($names);

var_dump($names[2]);

$names[2] = "razil";
var_dump($names);

// menghapus index
unset($names[1]);
var_dump($names);

$names[] = "joko";
var_dump($names);

var_dump(count($names));

// array asosiatif
$person = array(
    "id" => "012121",
    "nama" => "danil syah",
    "umur" => 28,
    "alamat" => array(
        "kecamatan" => "cimanggung",
        "kota" => "sumedang"
    ),
    "isMarried" => true
);

var_dump("Data Person : ");
var_dump($person);

var_dump($person["alamat"]["kota"]);