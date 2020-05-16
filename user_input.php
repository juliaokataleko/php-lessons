<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Input</title>
</head>
<body>
    
    <form action="user_input.php" method="get">
        Name: <input type="text" name="name" id="name">
        Idade: <input type="number" name="age" id="age">
        <input type="submit" value="Submit">
    </form>
    <hr>
    
    <?php
        echo "Your name: ";
        echo $_GET["name"] ?? "";
        echo "<br>Your age: ";
        echo $_GET["age"] ?? "";
    ?>

</body>
</html>