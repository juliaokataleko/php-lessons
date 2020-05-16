<?php

# functions
function sayHi($name, $age) {
    # function body
    echo "Hello $name, you are $age <br>";
}

sayHi("Sintia", 19);
sayHi("Rita", 19);
sayHi("Braulio", 16);
sayHi("Sus", 25);

# return statements in functions
echo "<hr>";

function cube($num) {
    return $num * $num * $num;
}

$cubeResult = cube(4);

echo $cubeResult;

?>