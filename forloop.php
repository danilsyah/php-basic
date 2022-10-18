<?php

for($counter = 1; $counter <= 10; $counter++){
    echo "ini adalah for loop ke-$counter". PHP_EOL;
}

for($counter = 10; $counter >= 1; $counter--){
    echo "for loop descrement ke-$counter". PHP_EOL;
}

for($counter = 1; $counter <=10; $counter++):
    echo "ini for loop ke-$counter". PHP_EOL;
endfor;