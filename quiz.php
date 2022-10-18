<?php

$r = 21;
$luas = 0;
if ($r % 7 == 0) {
    echo("Kelipatan 7\n");
    $luas = 22/7 * pow($r, 2);
}else{
    echo("Bukan kelipatan 7\n");
    $luas = 3.14 * pow($r, 2);
}

echo("luas = ". $luas);