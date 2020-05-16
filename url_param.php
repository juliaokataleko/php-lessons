<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>URL Param</title>
</head>
<body>

    <form action="url_param.php" method="get">
        Name: <input type="text" name="name" id=""> <br>
        <input type="submit" value="Submit">
    </form>

    <?php echo $_GET['name'] ?? ''; ?>

</body>
</html>