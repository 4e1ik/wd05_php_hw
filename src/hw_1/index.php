<?php

/// Task 1 \\\
$a = rand(-100, 100);
$b = rand(-100, 100);
$c = rand(-100, 100);

if ($a>$b && $a>$c){
    echo "Максимальное число => ${a}";
    // echo max($a, $b, $c);
    echo "<br>";
    echo "Число a равно: ${a}";
    echo "<br>";
    echo "Число b равно: ${b}";
    echo "<br>";
    echo "Число c равно: ${c}";
    echo "<br>";
    echo "<br>";
} else if ($b>$a&& $b>$c){
    echo "Максимальное число => ${b}";
    // echo max($a, $b, $c);
    echo "<br>";
    echo "Число a равно: ${a}";
    echo "<br>";
    echo "Число b равно: ${b}";
    echo "<br>";
    echo "Число c равно: ${c}";
    echo "<br>";
    echo "<br>";
} else {

    echo "Максимальное число => ${c}";
    // echo max($a, $b, $c);
    echo "<br>";
    echo "Число a равно: ${a}";
    echo "<br>";
    echo "Число b равно: ${b}";
    echo "<br>";
    echo "Число c равно: ${c}";
    echo "<br>";
    echo "<br>";
}

/// Task 2 \\\

// $a = rand(-100, 100);
// $b = rand(-100, 100);
// $c = rand(-100, 100);

if (($a > $c && $a < $b) || ($a > $b && $a < $c)){
    echo "Число a является средним";
    echo "<br>";
    echo "Число a равно: ${a}";
    echo "<br>";
    echo "Число b равно: ${b}";
    echo "<br>";
    echo "Число c равно: ${c}";
    echo "<br>";
    echo "<br>";
} else if(($b > $c && $b < $a) || ($b > $a && $b < $c)){
    echo "Число b является средним";
    echo "<br>";
    echo "Число a равно: ${a}";
    echo "<br>";
    echo "Число b равно: ${b}";
    echo "<br>";
    echo "Число c равно: ${c}";
    echo "<br>";
    echo "<br>";
} else if (($c > $b && $c < $a) || ($c > $a && $c < $b)){
    echo "Число c является средним";
    echo "<br>";
    echo "Число a равно: ${a}";
    echo "<br>";
    echo "Число b равно: ${b}";
    echo "<br>";
    echo "Число c равно: ${c}";
    echo "<br>";
    echo "<br>";
} else if($a==$b || $b==$c || $a==$c ){
    echo "Ошибка";
    echo "<br>";
    echo "<br>";
}

/// Task 3 \\\

$x = rand(-100, 100);
$y = rand(-100, 100);

if ($x > 0 && $y > 0){
    echo "Ваша точка находится в 1 чертверти";
    echo "<br>";
    echo "Координата x равна => ${x}";
    echo "<br>";
    echo "Координата y равна => ${y}";
} else if ($x < 0 && $y > 0){
    echo "Ваша точка находится в 2 чертверти";
    echo "<br>";
    echo "Координата x равна => ${x}";
    echo "<br>";
    echo "Координата y равна => ${y}";
} else if ($x < 0 && $y < 0){
    echo "Ваша точка находится в 3 чертверти";
    echo "<br>";
    echo "Координата x равна => ${x}";
    echo "<br>";
    echo "Координата y равна => ${y}";
} else if ($x > 0 && $y < 0){
    echo "Ваша точка находится в 4 чертверти";
    echo "<br>";
    echo "Координата x равна => ${x}";
    echo "<br>";
    echo "Координата y равна => ${y}";
} else {
    echo "Точка соответствует началу системы координат";
}