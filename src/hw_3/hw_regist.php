<?php
    session_start();
    include_once 'hw_db.php';
    echo "u must to regist";
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $login_reg = $_POST['login_reg'];
    $password_reg = md5($_POST['password_reg']);
    $admin_reg = $_POST['admin_reg'];
    $users_db_reg = mysqli_query($connection, "INSERT INTO users(login, password, admin) VALUES ('$login_reg', '$password_reg', '$admin_reg')"); // Извлекаем данные из базы данных
    $users_reg = mysqli_fetch_all($users_db_reg, MYSQLI_ASSOC);

}

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
    <input type = "text" name = "login_reg" placeholder="login">
    <input type = "password" name = "password_reg" placeholder="password">
    <input type = "text" name = "admin_reg" placeholder="1/2">
    <button type = "submit">Reg</button>
</form>
</body>
</html>
