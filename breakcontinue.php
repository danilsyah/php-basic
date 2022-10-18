<?php

for($x = 1; $x < 10; $x++){
    if($x % 7 === 0){
        echo "$x adalah bilangan kelipatan 7". PHP_EOL;
        break;
    }else{
        echo "$x adalah bilangan tidak kelipatan 7" . PHP_EOL;
        continue;
    }
}

$counter = 1;
while(true){
    echo "Ini adalah for while ke-$counter". PHP_EOL;
    $counter++;

    if($counter > 10){
        break;
    }
}

for($counter = 1; $counter <= 100; $counter++){
    if($counter % 2 == 0){
        continue;
    }
    echo "Counter : $counter". PHP_EOL;
}