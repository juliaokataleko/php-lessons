<?php

# concepts about inheritance

class Chef {

    function makeChicken() {
        echo "The Chef makes chicken <br>";
    }

    function makeSalad() {
        echo "The Chef makes salad <br> ";
    }

    function makeSpecialDish () {
        echo "The chef makes bbq <br> ";
    }

}

class ItalianChef extends Chef {

    function makePasta() {
        echo "The Italian Chef make Pasta <br> ";
    }

    # override makeSpecialDish method
    function makeSpecialDish () {
        echo "The chef makes chicken parm <br> ";
    }

}

$chef = new Chef;
$chef->makeChicken();
$chef->makeSpecialDish();

echo "<hr>";

$italianChef = new ItalianChef;
$italianChef->makePasta();
$italianChef->makeSpecialDish();