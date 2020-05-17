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

echo "<hr>Explode<hr>";

$text = "red, orange, black, blue, red, green, cyan, teal, pink";
$columns = "Sus|Marta|Isabel|Yela|Mimi|Magda|JFK";
$text_array = explode('|', $columns, 2);
$text_array2 = explode(', ', $text);

print_r($text_array);

echo "<hr>Str Replace<hr>";
$bodyTag = str_replace("%body%", "blue", "<body text='%body%'");
echo $bodyTag;
echo "<br>";
$vowels = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
$text = "Clever techie is awesome. I Love your videos";
echo str_replace($vowels, "", $text);

// implode
$array = ["Julien", "Marta.."];
$gluded = implode(", ", $array);
echo "<br>" . $gluded;

// strlen
echo "<hr> Quantidade de caracteres: " . strlen($gluded);

// array_merge
$array2 = ["Suzuki", "Ferrari", "Yamaha", "DT", ["BMX", "ADIDAS"]];
$merged_array = array_merge($array, $array2);
echo "<br>";
print_r($merged_array);

// str_pos
echo strpos($text, 'techie');
?>