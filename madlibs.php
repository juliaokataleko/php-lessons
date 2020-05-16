<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MadLibs Game</title>
</head>
<body>

    <form action="madlibs.php" method="get">
        Color: <input type="text" name="color" id="">
        Plural Noun: <input type="text" name="pluralNoun" id="pluralNoun">
        Celebrity: <input type="text" name="celebrity" id="celebrity">

        <input type="submit" value="Enivar">
    </form>
    <hr>
    <?php
        $color = $_GET['color'] ?? '';
        $pluralNoun = $_GET['pluralNoun'] ?? '';
        $celebrity = $_GET['celebrity'] ?? '';

        echo "Roses a $color <br>";
        echo "$pluralNoun are blue<br>";
        echo "I love $celebrity <br>";
    ?>
</body>
</html>