<?php

    include_once 'db.php';
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $filePath = '';
//        mkdir('uploads'); //Создал папку uploads
        if (!empty($_FILES) && isset($_FILES['img'])){
            foreach ($_FILES as $FILE){
                $name = $_FILES['img']['name'];
                $filePath = "uploads\\".$name;
                $res1 = mysqli_query($connection, "select img from posts where img like '(_)$name' or img = '$name';");
                $sql2 = mysqli_fetch_all($res1);
                if (!empty($sql2)) {
                    $i = count($sql2);
                    $name = "($i)" . $name;
                    $filePath = "uploads\\" . $name;
                }
                $dir = '\\wsl$\Ubuntu-22.04\home\artemi\projects\wd05\src';
                move_uploaded_file('\\wsl$\docker-desktop-data\data\docker\tmp\\'.$_FILES['img']['name'], $dir."\\".$filePath);
                $sql1 = "INSERT INTO posts (img) VALUES ('$filePath');";
                mysqli_query($connection, $sql1);
            }
        }
    }


echo "<pre>";
print_r($_POST);
echo "<pre>";

echo "<pre>";
print_r($_FILES);
echo "<pre>";





?>
