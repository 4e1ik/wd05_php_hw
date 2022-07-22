<?php
    session_start();
    include_once 'db.php';
    include_once 'my_functions.php';
    include_once 'Human.php';
    include_once 'Animal.php';
    include_once 'Debug.php';
    include_once 'Student.php';
    include_once 'Worker.php';

    $worker1 = new Worker;
    $worker2 = new Worker;
    $worker3 = new Worker('Артем', 35, 5000);

    $worker1->name = 'Иван';
    $worker1->age = 25;
    $worker1->salary = 1000;

    $worker2->name = 'Вася';
    $worker2->age = 26;
    $worker2->salary = 2000;

    echo $worker1->age + $worker2->age;
    echo "<br>";
    echo $worker1->salary + $worker2->salary;
    echo "<br>";
    echo $worker3->say();


//    $human1 = new Human('Artem', 21, 'M');
//    $human2 = new Human('Egor', 17, 'M');
//
//    $student1 = new Student('Anton', 33, 'M');
//
//    echo  $human1 -> sayHello();
//    echo "<br>";
//    echo  $human2 -> sayHello();
//    echo "<br>";
//    echo  $student1 -> sayAnswer();
//    echo "<br>";
//    echo  $student1 -> sayHello();
//    echo "<br>";
//
//    echo $human1->setName('sd');
//    Debug::debug($human1->getName());

//    $animal1 = new Animal('Tigra', 4);
//    $animal2 = new Animal('Bubl', 0);
//
//    echo  $animal1 -> sayHello();
//    echo "<br>";
//    echo  $animal2 -> sayHello();
//    echo "<br>";






    $res = mysqli_query($connection, 'select * FROM posts'); // Извлекаем данные из базы данных
    $posts = mysqli_fetch_all($res, MYSQLI_ASSOC); //Извлекаем данные из $res (возвращает данные, состоящие из индексного массива)
    // print_r($posts);
    //$posts = mysqli_fetch_assoc($res); //Возвращает один массив по id 1, при следующем вызове возваращет массив по индексу  2
    //$posts = mysqli_fetch_array($res); //Возвращает один массив по всей таблице
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Blog Home - Start Bootstrap Template</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>
<body>
<!-- Responsive navbar-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#!">Start Bootstrap</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#!">About</a></li>
                <li class="nav-item"><a class="nav-link" href="#!">Contact</a></li>
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Blog</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- Page header with logo and tagline-->
<header class="py-5 bg-light border-bottom mb-4">
    <div class="container">
        <div class="text-center my-5">
            <h1 class="fw-bolder">Welcome to Blog Home!</h1>
            <p class="lead mb-0">A Bootstrap 5 starter layout for your next blog homepage</p>
        </div>
    </div>
</header>
<!-- Page content-->
<div class="container">
    <div class="row">
        <!-- Blog entries-->
        <div class="col-lg-8">
            <!-- Nested row for non-featured blog posts-->



            
            <div class="row">
<!--                --><?php

                foreach ($posts as $post) :
//                    $shortText = strip_tags($post['content']);
//                    $shortText = mb_substr($post['content'],0,  150);
//                    $pos = mb_strrpos($shortText, ' ');
//                    if ($pos !== false){
//                        $shortText = mb_substr($shortText, 0, $pos);
//                    }
//                    $shortText.="...";
                    ?>

                    <div class="col-lg-12">
                        <!-- Blog post-->
                        <div class="card mb-4">
                            <a href="#!"><img class="card-img-top" src="/<?= $post['img'] ?>" alt="..." /></a>
                            <div class="card-body">
                                <div class="small text-muted">January 1, 2022</div>
                                <h2 class="card-title h4"><?= $post['title'] ?></h2>
                                <p class="card-text"><?= shortText($post['content']) ?></p>
                                <a class="btn btn-primary" href="/page.php?id=<?= $post['id'] ?>">Read more →</a>
                            </div>
                        </div>
                        <!-- Blog post-->
                        <!-- <div class="card mb-4">
                            <a href="#!"><img class="card-img-top" src="https://dummyimage.com/700x350/dee2e6/6c757d.jpg" alt="..." /></a>
                            <div class="card-body">
                                <div class="small text-muted">January 1, 2022</div>
                                <h2 class="card-title h4">Post Title</h2>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla.</p>
                                <a class="btn btn-primary" href="#!">Read more →</a>
                            </div>
                        </div> -->
                    </div>
                <?php endforeach ?>
            </div>



            <!-- Pagination-->
            <nav aria-label="Pagination">
                <hr class="my-0" />
                <ul class="pagination justify-content-center my-4">
                    <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1" aria-disabled="true">Newer</a></li>
                    <li class="page-item active" aria-current="page"><a class="page-link" href="#!">1</a></li>
                    <li class="page-item"><a class="page-link" href="#!">2</a></li>
                    <li class="page-item"><a class="page-link" href="#!">3</a></li>
                    <li class="page-item disabled"><a class="page-link" href="#!">...</a></li>
                    <li class="page-item"><a class="page-link" href="#!">15</a></li>
                    <li class="page-item"><a class="page-link" href="#!">Older</a></li>
                </ul>
            </nav>
        </div>
        <!-- Side widgets-->
        <div class="col-lg-4">
            <!-- Search widget-->
            <div class="card mb-4">
                <div class="card-header">Search</div>
                <div class="card-body">
                    <form action="add_page.php" method = "get">
                        <div class="input-group">
                            <input class="form-control" name = "query" type="text" placeholder="Enter search term..." aria-label="Enter search term..." aria-describedby="button-search" />
                            <button class="btn btn-primary" id="button-search" type="submit">Go!</button>
                        </div>
                    </form>
                    
                </div>
            </div>
            <!-- Categories widget-->
            <div class="card mb-4">
                <div class="card-header">Categories</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <ul class="list-unstyled mb-0">
                                <li><a href="#!">Web Design</a></li>
                                <li><a href="#!">HTML</a></li>
                                <li><a href="#!">Freebies</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-6">
                            <ul class="list-unstyled mb-0">
                                <li><a href="#!">JavaScript</a></li>
                                <li><a href="#!">CSS</a></li>
                                <li><a href="#!">Tutorials</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Side widget-->
            <div class="card mb-4">
                <div class="card-header">Side Widget</div>
                <div class="card-body">You can put anything you want inside of these side widgets. They are easy to use, and feature the Bootstrap 5 card component!</div>
            </div>
        </div>
    </div>
</div>
<!-- Footer-->
<footer class="py-5 bg-dark">
    <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2022</p></div>
</footer>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
</body>
</html>
