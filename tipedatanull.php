<?php

$nama = "danil";
$nama = NULL;

var_dump($nama);
// function untuk cek apakah nilai variabel null atau ada
var_dump(is_null($nama));

// function untuk menghapus variabel
$contoh = "test";
unset($contoh);

// echo $contoh; error

// function untuk mengecek variabel dan ada nilainya
$contoh = "belajar php";
$contoh = null;

var_dump(isset($contoh));