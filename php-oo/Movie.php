<?php
/**
 * Creating Book Class
 * A class may start always with capital letter
 */
class Movie {

    # public and private properties
    public $title;
    private $rating;

    # we use constructor to initialize the object

    function __construct($t, $r) {
        $this->title = $t;
        $this->setRating($r);
    }

    # get method
    function getRating() {
        return $this->rating;
    }

    # set method
    function setRating($rating) {
        if($rating == "G" || $rating == "PG" || $rating == "PG-12" || $rating == "PG-14")
            return $this->rating = $rating;
        return $this->rating = "PG";
    }

}

$movie = new Movie("Assalto Em Luanda", "PG-14");

echo $movie->title . ' - ' . $movie->getRating();
