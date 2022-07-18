<?php
session_start();
//if (!isset($_SESSION['is_admin']) || $_SESSION['is_admin'] !== 1) {
//    echo "Go to login";
//    echo"<br>";
//    echo "u not admin";
//    die();
//}

if(!isset($_SESSION['is_admin'])){
    echo "Go to login";
    die();
}

if($_SESSION['is_admin'] !== 1){
    echo "u not admin";
    die();
}

echo "login succsess";
?>