<?php

    function shortText($content){
            $shortText = strip_tags($content);
            $shortText = mb_substr($content, 0, 150);
            $pos = mb_strrpos($shortText, ' ');
            if ($pos !== false) {
                $shortText = mb_substr($shortText, 0, $pos);
            }
            $shortText .= "...";
        }

//        function multArr($arr, $a){
//
//            echo "<pre>";
//            print_r($arr);
//            echo "<pre>";
//
//            foreach ($arr as $key => $el){
//                $arr[$key] = $el * $a;
//            }
//            echo "<pre>";
//            print_r($arr);
//            echo "<pre>";
//
//        }
//        echo "<pre>";
//        print_r(multArr([1, 2, 3, 4], 2));
//        echo "<pre>";


//Задача 6. Решите простую математическую задачу: 3 человека пошли за покупками.
//Каждый следующий потратил в 5 раз больше предыдущего.
//Сколько потратил каждый, если все вместе заплатили 24 грн 80 коп? 186 грн?  319 грн 30 коп?

//        function qest($sum){
////            1 - 5
////            2 - 10
////            3 - 15
//        }

//        qest(186);
?>