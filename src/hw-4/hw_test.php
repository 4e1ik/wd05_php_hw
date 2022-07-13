<?php
include_once 'hw_db.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    if (!empty($_FILES) && isset($_FILES['file'])){
        foreach ($_FILES as $file) {
            $name = $file['name'];
            $res = mysqli_query($connection, "select file from files where file like '%$name%';");
            $sql = mysqli_fetch_all($res);
            if(!empty($sql)){
                $i = count($sql);
                $name = "($i)".$name;
            }
            $namePath = "uploads/".$name;
            $file_name = $name;
            move_uploaded_file($file['tmp_name'], __DIR__."/".$namePath);
            mysqli_query($connection, "insert into files (file_name, file) values ('$file_name', '$namePath');");
        }
    }

    $list = scandir('uploads');
    foreach ($list as $el){
        echo "Имя файла => ".$el."<br>"."Путь к файлу => ".__DIR__."/uploads/".$el."<br>"."Размер файла => ".(filesize( __DIR__."/uploads/".$el)/1024000)." MB"."<br>"."<br>";
    }
}
?>
