<?php

echo 'nama : ';
echo 'Danil Syah Arihardjo';

echo "nama : \n";
echo "Haykal\t Dafiansyah\n";

// heredoc bisa parsing variabel
$name = 'UDIN';
echo <<<DANIL
selamat datang di pembelajaran PHP, $name
sekarang kita akan belajar bahasa pemrograman PHP
ini adalah cara ketiga membuat string bisa menggunakan heredoc

DANIL;

//nowdoc tidak bisa parsing variabel
$name = 'Danil';
echo <<<'DANIL'
selamat datang di pembelajaran PHP,
sekarang kita akan belajar bahasa pemrograman PHP
ini adalah cara ketiga membuat string bisa menggunakan nowdoc
DANIL;