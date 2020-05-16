<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>

<body>

    <!-- <form action="calculator.php" method="get">
        First Number:<br><input type="number" name="num1" id="num1"> <br>
        Second Number: <br><input type="number" name="num2" id="num2">
        <input type="submit" value="Submit">
    </form> -->
    <hr>

    <?php
    # echo "Answer: ";
    # echo $_GET["num1"] + $_GET["num2"];
    ?>

    <form action="calculator.php" method="post">
        First Number:<br><input type="number" step="0.1" name="num1" id="num1"> <br>
        OP: <br><input type="text" name="op" id="op"> <br>
        Second Number: <br><input type="number" name="num2" id="num2"> <br>
        <input type="submit" value="Submit">
    </form>

    <?php
    # calculator 2.0
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    $op = $_POST['op'];

    if($op == "+") echo $num1 + $num2;
    else if($op == "-") echo $num1 - $num2;
    else if($op == "/") echo $num1 / $num2;
    else if($op == "*") echo $num1 * $num2;
    else echo "Invalid Operator";
    ?>

</body>

</html>