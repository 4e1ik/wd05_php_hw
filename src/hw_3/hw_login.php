<?php
session_start();
include_once 'hw_db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $users_db = mysqli_query($connection, 'select * FROM users'); // Извлекаем данные из базы данных
    $users = mysqli_fetch_all($users_db, MYSQLI_ASSOC); //возвращает данные, состоящие из индексного массива
    $login = $_POST['login'];
    $password = md5($_POST['password']);
    foreach ($users as $user) {
        if (in_array($login, $user) && in_array($password, $user)){
            if ($user['admin'] == 1) {
                $_SESSION['is_admin'] = 1;
            } else {
                $_SESSION['is_admin'] = 0;
            }
        }
    }
}

var_dump($_SESSION);
echo "<br>";
var_dump($_POST);
//echo "<br>";
//echo md5(1111);
//echo "<br>";
//echo md5(2222);
//echo "<br>";
//echo md5(3333);
//echo "<br>";
//echo md5(4444);
//echo "<br>";
//echo "<pre>";
//print_r($users);
//echo "<pre>";


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
