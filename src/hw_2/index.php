<?php 

    $arr = [];

    for ($i=1; $i < 9; $i++) { 
        for ($j=0; $j < 10; $j++) { 
            $str = (($i+1)." * ".($j+1)." = ".($i+1)*($j+1));
            $arr[] = $str;
        }
    }
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <table border="1" width="100%" cellpadding="5">

        <?php for ($i = 0; $i < 10; $i++) : ?>
            <tr>
                <?php for ($j=0; $j < 8; $j++) : ?>
                    <td><?php echo $arr[(($j*10)+$i)];?></td>
                <?php endfor ?>
            </tr>
        <?php endfor ?>
        
    </table>
    
</body>
</html>