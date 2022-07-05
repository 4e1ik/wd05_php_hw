<?php

    include_once 'db.php';
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $title = $_POST['title'];
        $content = $_POST['content'];
        $sql1 = "INSERT INTO posts (title, content) VALUES ('$title', '$content');";
        echo $sql1;
    }

    mysqli_query($connection, $sql1);
    

?>
