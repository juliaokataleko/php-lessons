<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Input</title>
</head>
<body>
    
    <form action="checkbox.php" method="post">
        Apples: <input type="checkbox" name="fruits[]" 
        id="fruits" value="apples"> <br>

        Oranges: <input type="checkbox" name="fruits[]" 
        id="fruits" value="oranges"> <br>

        Peras: <input type="checkbox" name="fruits[]" 
        id="fruits" value="pears"> <br>

        <input type="submit" value="Submit">
    </form>
    <hr>
    
    <?php
        $fruits = $_POST['fruits'];
        echo $fruits[0];
    ?>

</body>
</html>