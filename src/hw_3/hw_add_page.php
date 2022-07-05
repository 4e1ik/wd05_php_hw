<?php
session_start();
if (!isset($_SESSION['is_admin']) || $_SESSION['is_admin'] !== 1) {
    echo "Go to login";
    die();
}

echo "login succsess";
?>