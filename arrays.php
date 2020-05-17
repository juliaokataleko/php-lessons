<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    <h1>Arrays</h1>
    <?php
        $friends = array("Kevin", "karen", "Oscar", "Jim", array("Maria", "Pedro", "ivone")); // or []
        echo count($friends);

        echo "<hr>";
        // count recursive
        echo count($friends, COUNT_RECURSIVE);
        // is array function
        echo "<hr>";

        $array = ["John", "Mary"];

        if(is_array($array)) {
            for($i=0; $i<count($array); $i++) {
                echo $array[$i].'<br>';
            }
        } else {
            echo "Its is not a array";
        }
    ?>
</body>
</html>