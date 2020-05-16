<?php

$isMale = false;
$isTall = true;

if ($isMale && $isTall) {
    echo "You are a tall Male";
} else if($isMale && !$isTall) {
    echo "You are not a tall Male";
} else if(!$isMale && $isTall) {
    echo "You are not male but you are tall";
} else {
    echo "You are not male";
}

echo "<hr>";

function getMax($num1, $num2) {
    if($num1 > $num2) {
        return $num1;
    } else if($num1 < $num2) {
        return $num2;
    } 
    return "Nenhum número é maior";
}

function getMax2($num1, $num2, $num3) {
    if($num1 >= $num2 && $num1 >= $num3) {
        return $num1;
    } else if($num2 >= $num2 && $num2 >= $num3) {
        return $num2;
    } else return $num3;
}

echo getMax(73,73);
echo "<br>";
echo getMax2(12, 43,2)." é maior";

?>