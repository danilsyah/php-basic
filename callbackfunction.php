<?php

function sayHello(string $name, callable $filter){
    $finalName = call_user_func($filter, $name);
    echo "Hello $finalName". PHP_EOL;
}

sayHello("danil", "strtoupper");
sayHello("DANIL", "strtolower");
sayHello("danil", function(string $name): string{
    return strtoupper($name);
});

sayHello("danil", fn($name)=> strtoupper($name));