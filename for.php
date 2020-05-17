<?php
# for loops

$index = 0;

$luckNumbers = [23,9,12,4,46];

for($index; $index <= 1000; $index++):
    if(in_array($index, $luckNumbers))
        echo "<span style='background:#0000ff; 
        padding:5px; color:#fff'>$index </span>";
    else echo "$index | ";
endfor;