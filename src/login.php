<?php
    session_start();
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        if ($_POST['login'] == 'admin' && $_POST['password'] == '1111'){
            $_SESSION['is_admin'] = 1;
        }
    }

    var_dump($_SESSION);
    echo "<br>";
    var_dump($_POST);

//session_destroy();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" method = "post">
        <input type = "text" name = "login" placeholder="login">
        <input type = "password" name = "password" placeholder="password">
        <button type = "submit">Login</button>
    </form>
</body>
</html>
