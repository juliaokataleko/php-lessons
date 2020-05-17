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
echo "<hr>Native PHP functions<hr>";
// native PHP functions
$text = "Julian is clever";
# substr
echo substr($text, 0, 6);
echo "<br>";
echo substr($text, 7, 2);
echo "<br>";
echo substr($text, -1);
?>