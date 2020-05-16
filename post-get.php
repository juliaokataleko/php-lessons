<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post vs GET</title>
</head>
<body>
    <form action="post-get.php" method="post">
        <label for="password">Password</label>
        <input type="password" name="password" id="">
        <input type="submit" value="Submit">
    </form>
    <?php echo $_POST['password']; ?>
</body>
</html>