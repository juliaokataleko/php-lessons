<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Grade</title>
</head>

<body>
    <form action="" method="post">
        <input type="text" name="grade" id="">
        <input type="submit" value="Grade">
    </form>
    <?php

        $grade = $_POST["grade"];

        switch ($grade) {
            case "A":
                echo "You did amazing...";
                break;
            case "B":
                echo "You did pretty good...";
                break;
            default: 
                echo "Inválido";
        }

    ?>
</body>

</html>