<?php
# learning while loop
$index = 1;

while($index <= 1500) {
    echo "$index | ";
    $index++;
}
echo "<hr>";

$index = 1501;

# do while always show the first content loop...
# first execute, then check condition
do {
    echo "$index | ";
    $index++;
}while($index <= 1500);