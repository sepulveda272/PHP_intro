<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>metodo get</h3>
    <form action="get_post.php" method="get">
        <label>user</label>
        <input type="text" name="user">
        <label>Password</label>
        <input type="password" name="password">
        <input type="submit" value="Send">
    </form>
    <br>
    <?php
        echo "{$_GET["user"]}<br>";
        echo "{$_GET["password"]}";
    ?>
    <br>
    <h3>metodo post</h3>
    <form action="get_post.php" method="post">
        <label>user</label>
        <input type="text" name="user1">
        <label>Password</label>
        <input type="password" name="password1">
        <input type="submit" value="Send">
    </form><br>
    <?php
        echo "{$_POST["user1"]}<br>";
        echo "{$_POST["password1"]}";
    ?>
</body>
</html>

