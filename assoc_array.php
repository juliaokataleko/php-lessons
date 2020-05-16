<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Array</title>
</head>
<body>

<form action="" method="post">
    Name: <input type="text" name="student" id="student">
    <input type="submit" value="Submit">
</form>

<?php

    $grades = array(
        "Jim"=>"A+", "Pam"=>"B-", "Oscar"=>"C+"
    );

    # nos arrays associativos acessamos dados apartir das chaves(keys)
    # nos arrays normais acessamos apartir da posição
    $grades["Jim"] = "F";
    // $grades["Jim"];

    echo count($grades);
    echo "<br>";
    echo $grades[$_POST['student']];

?>
    
</body>
</html>