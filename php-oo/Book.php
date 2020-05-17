<?php
/**
 * Creating Book Class
 * A class may start always with capital letter
 */
class Book {
    var $title;
    var $author;
    var $pages;

    // we use constructor to initialize the object
    function __construct($t, $a, $p) {
        $this->title = $t;
        $this->author = $a;
        $this->pages = $p;
    }
    
}

$book1 = new Book("sagrada Esperança", "O Homem na Lua", 400);
$book1->title = "Outro titulo";

var_dump($book1);
echo "<hr>";

$book2 = new Book("sagrada Esperança", "O Homem na Lua", 400);
var_dump($book2);