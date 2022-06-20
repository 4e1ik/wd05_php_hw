<?php

// Массив

// $arr1 = [1, 2, "sfg", 34];
// echo "<pre>";
// print_r($arr1); // Функция вывода на эран, но выводит всю перменную целиком
// echo "<pre>";

// $arr2 = [
//     3 => 4,
//     2 => 1
// ];

// echo "<pre>";
// print_r($arr2);
// echo "<pre>";

// $arr3 = [
//     'adf' => 'adsfdg',
//     'asdfdg' => 'sfdgbv',
//     null => 'sdfg',
// ];

// $arr3['1'] = 'adfa'; // Добавить элемент в массив с ключом

// echo "<pre>";
// print_r($arr3);
// echo "<pre>";

// echo $arr3['adf'];

/////////////////////

// $arr = [2, 4, 6, 8, 10];

// echo "<pre>";
// print_r($arr);
// echo "<pre>";

// $arr2 = [
//     'mother' => 'Victoria',
//     'father' => 'Pavel',
//     'son' => 'Artemi',
// ];

// echo "<pre>";
// print_r($arr2);
// echo "<pre>";

//////////////////

// $post = [
//     'title' => 'Моя первая страница',
//     'content' => 'Какой-нибудь текст',
//     'picture' => "https://www.sunhome.ru/i/wallpapers/163/alberta-banf-kanada.1920x1200.jpg",
// ];

// ?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?=$post['title'] ?></h1>
    <img src=" <?=$post['picture']?>" alt="Картинка">
    <h1><?=$post['content'] ?></h1>
</body>
</html> -->

<?php
    // $arr = [
    //     '1' => 1,
    //     '2' => [
    //         '4' => 4,
    //     ],
    // ];

    // $level1 = $arr[2];
    // $level2 = $level1[4];

    // echo $level1;
    // echo"<br>";
    // echo $level2;

    // $array = ['love', 'PHP', 'I'];

    // echo $array[2].' '. $array[0].' '. $array[1];

    // $arr = [
    //     'frontend' => [
    //         'html', 'css',
    //     ],
    //     'backend' => [
    //         'php', 'nginx',
    //     ],
    //     'database' => 'MySQL',
    // ];

    // echo "<pre>";
    // print_r($arr);
    // echo "<pre>";

    // $front = $arr['frontend'];
    // $back = $arr['backend'];
    // $data = $arr['database'];
    // $html = $front[1];

    // echo $arr['frontend'][0];
    // echo "<br>";
    // echo $arr['database'];
    // echo "<br>";

    // echo $front;

    $students = [
        'wd05' => [
            ['name' => 'Artem','surname' => 'Sev'],
            ['name' => 'Alex','surname' => 'Dire']

        ],
        'wd04' => [
            ['name' => 'Mari','surname' => 'Nur'],
            ['name' => 'Dima','surname' => 'Dumz',
            ],
        ],
    ];

    echo "<pre>";
    print_r($students['wd05'][0]['name']." ".$students['wd05'][0]['surname']);
    echo "<pre>";

    echo "<pre>";
    print_r($students['wd05'][1]['name']." ".$students['wd05'][1]['surname']);
    echo "<pre>";

    echo "<pre>";
    print_r($students['wd04'][0]['name']." ".$students['wd05'][0]['surname']);
    echo "<pre>";

    echo "<pre>";
    print_r($students['wd04'][1]['name']." ".$students['wd05'][1]['surname']);
    echo "<pre>";
    

?>