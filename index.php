<?php

$directory = './';

$file = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($directory));

while($file->valid()) {

    if (!$file->isDot()) {
        if(substr($file->getSubPathName(), 0, 4) != '.git')
            echo "<a href='" . $file->getSubPathName() . "'>" . $file->getSubPathName() . "</a><br>";
    }

    $file->next();
}