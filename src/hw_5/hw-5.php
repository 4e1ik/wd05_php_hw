<?php

    function br(){
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
    }

//1. Написать функцию, которая возводит число в указанную степень

    function rank($a, $b){ // a - число, b - степень
        echo pow($a, $b);
    }

    rank(2, 3);
    br();

//2. Написать функцию, которая проверяет, являются ли все буквы в строке строчными

    function lowerCase($a){
        $b = strtolower($a);
        if ($a === $b){
            echo "Присутствует заглавная буква";
        } else {
            echo "Все буквы являются заглавными";
        }
    }

    lowerCase('asdFg');
    br();

//3. Написать функцию, которая генерирует массив указанной длинны со случайными значениями

    function randArr($a){
        $arr = [];
        for ($i = 0; $i < $a; $i++){
            $arr[$i]=rand(1,100);
        }
        echo "<pre>";
        print_r($arr);
        echo "<pre>";
    }

    randArr(10);
    br();

//4 ф-ция, которая по номеру дня возвращает его название

    function days($a){
        switch ($a) {
            case 1:{
                echo "Понедельник";
                break;
            }
            case 2:{
                echo "Вторник";
                break;
            }
            case 3:{
                echo "Среда";
                break;
            }
            case 4:{
                echo "Четверг";
                break;
            }
            case 5:{
                echo "Пятница";
                break;
            }
            case 6:{
                echo "Суббота";
                break;
            }
            case 7:{
                echo "Воскресение";
                break;
            }
            default:{
                echo "Введен неверный символ";
            }
        }
    }

    days(5);
    br();


//5. Написать функцию которая выводит n-ое число Фибоначчи

    function fibon($n){
        $n = (1/sqrt(5))*(pow(((1+sqrt(5))/2), $n-1)-pow((((1-sqrt(5))/2)), $n-1));
        echo $n;
    }

    fibon(30);

?>