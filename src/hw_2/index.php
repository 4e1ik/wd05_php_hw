<?php

    function ech(){
        echo "<br>";
        echo "<br>";
        echo "---------------------------------------------------------------------------------------------------------------------------------";
        echo "<br>";
        echo "<br>";
    }


    //////////////////////
    // TASK 1
    //////////////////////

    echo "TASK 1";
    echo "<br>";

    $positive_arr = [];

    for ($i=0; $i < 10; $i++) { 
        $positive_arr[] = rand(-100, 100);
    }

    echo "<pre>";
    print_r($positive_arr);
    echo "<pre>";

    echo "<pre>";
    print_r(array_filter($positive_arr, function($el) {
        return $el > 0;
    }));
    echo "<pre>";

    ech();

    //////////////////////
    // TASK 2
    //////////////////////

    echo "TASK 2";
    echo "<br>";

    $arith_arr = [];

    for ($i=0; $i < 10; $i++) { 
        $arith_arr[] = rand(-100, 100);
    }

    echo "<pre>";
    print_r($arith_arr);
    echo "<pre>";

    foreach ($arith_arr as $key => $value) {
        if ($value > (array_sum($arith_arr)/count($arith_arr))){

            echo "Ключ элемента, который больше среднеарифметического значения ".array_sum($arith_arr)/count($arith_arr)." => ".$key;
            echo "<br>";
        }
    }

    ech();

    //////////////////////
    // TASK 3
    //////////////////////

    echo "TASK 3";
    echo "<br>";

    $arr_3 = [];

    for ($i=0; $i < 10; $i++) { 
        $arr_3[] = rand(-100, 100);
    }

    echo "<pre>";
    print_r($arr_3);
    echo "<pre>";

    for ($i=1; $i < (count($arr_3)-1); $i++) { 
        if ($arr_3[$i]>$arr_3[$i-1]) {
            echo $arr_3[$i];
            echo "<br>";
        } else {
            echo "Элемент меньше предыдущего";
            echo "<br>";
        }
    }

    ech();

    //////////////////////
    // TASK 4
    //////////////////////

    echo "TASK 4";
    echo "<br>";

    $arr_4 = [];

    for ($i=0; $i < 20; $i++) { 
        $arr_4[] = rand(-100, 100);
    }

    echo "<pre>";
    print_r($arr_4);
    echo "<pre>";

    for ($i=0; $i < count($arr_4); $i++) { 
        for ($j=$i+1; $j < count($arr_4); $j++) { 
            if ($arr_4[$i] === $arr_4[$j]) {
                echo "В массиве присутствуют повторяющиеся элементы";
                echo "<br>";
                break 2;
            }
        }
    }

    ech();

    //////////////////////
    // TASK 5
    //////////////////////

    echo "TASK 5";
    echo "<br>";

    $arr_5 = [1, 2, 3, 3, 3, 4];

    // for ($i=0; $i < 30; $i++) { 
    //     $arr_5[] = rand(-100, 100);
    // }

    echo "<pre>";
    print_r($arr_5);
    echo "<pre>";

    $a = array_count_values($arr_5);

    foreach ($a as $key => $value) {
        if ($value >= 3){
            unset($a[$key]);
        }
    }

    echo "<pre>";
    print_r(array_keys($a));
    echo "<pre>";

    ech();

    //////////////////////
    // TASK 6
    //////////////////////

    echo "TASK 6";
    echo "<br>";

    $arr_6 = [1, 2];

    echo "<pre>";
    print_r($arr_6);
    echo "<pre>";

    $a = count($arr_6);
    $b = count($arr_6, COUNT_RECURSIVE);

    if ($a == $b){
        echo "Массив одномерный";
    } else {
        echo "Массив имеет в своем составе другие массивы";
    }

    ech();

    //////////////////////
    // TASK 7
    //////////////////////

    echo "TASK 7";
    echo "<br>";

    $mult_table = [];

    for ($i=1; $i < 9; $i++) { 
        for ($j=0; $j < 10; $j++) { 
            $str = (($i+1)." * ".($j+1)." = ".($i+1)*($j+1));
            $mult_table[] = $str;
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
                    <td><?php echo $mult_table[(($j*10)+$i)];?></td>
                <?php endfor ?>
            </tr>
        <?php endfor ?>
        
    </table>
    
</body>
</html>