<?php

$nilai = "A";

switch($nilai){
    case "A":
        echo "Nilai Anda $nilai Lulus dengan sangat baik". PHP_EOL;
        break;
    case "B":
    case "C":
        echo "Anda Lulus dengan Nilai $nilai". PHP_EOL;
        break;
    case "D":
        echo "Anda Tidak Lulus dengan nilai $nilai". PHP_EOL;
        break;
    default:
        echo "Mungkin anda salah Jurusan" . PHP_EOL;
    
}

switch($nilai):
    case "A":
        echo "Nilai Anda $nilai Lulus dengan sangat baik". PHP_EOL;
        break;
    case "B":
    case "C":
        echo "Anda Lulus dengan Nilai $nilai". PHP_EOL;
        break;
    case "D":
        echo "Anda Tidak Lulus dengan nilai $nilai". PHP_EOL;
        break;
    default:
        echo "Mungkin anda salah Jurusan" . PHP_EOL;
    
    endswitch;