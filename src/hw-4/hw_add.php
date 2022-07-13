<?php
session_start();
if (!file_exists('uploads')){
    mkdir('uploads');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
<form action="hw_test.php" method="post" enctype="multipart/form-data">
    <input type="file" name="file">
    <br>
<!--    <input type="file" name="file2">-->
<!--    <br>-->
    <button type="submit">Send</button>
</form>

</body>
</html>