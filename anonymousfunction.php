<?php
$sayHello = function(string $name){
    echo "Hello $name". PHP_EOL;
};

$sayHello("danil");
$sayHello("haykal");

function sayGoodBye(string $name, $filter){
    $finalName = $filter($name);
    echo "Good Bye $finalName". PHP_EOL;
}

sayGoodBye("danil", function(string $name): string{
    return strtoupper($name);
});

$filterFunction = function(string $name):string{
    return strtoupper($name);
};

sayGoodBye("haykal", $filterFunction);

$firstName = "danil";
$lastName = "syah";


$sayHelloDanil = function() use($firstName, $lastName){
    echo"Hello $firstName $lastName". PHP_EOL;
};
$sayHelloDanil();

