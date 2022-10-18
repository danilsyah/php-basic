<?php

$counter = 1;

while ($counter <= 10) {
    echo "Helloooo : $counter" . PHP_EOL;
    $counter++;
}

$counter = 1;
while($counter <= 10):
    echo "test ke $counter" . PHP_EOL;
    $counter++;
endwhile;