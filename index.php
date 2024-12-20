<?php include("path.php") ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Font awesome -->
    <script src="https://kit.fontawesome.com/191c96ceba.js" crossorigin="anonymous"></script>

    <!-- style.css -->


    <!-- font Comfortaa -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300..700&display=swap" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Max Blog</title>
</head>
<body>

<!-- HEADER START -->
<?php include("app/include/header.php") ?>
<!-- HEADER END -->

<!-- Autoplaying carousel Bootstrap  START-->
<div class="container-fluid p-0">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/images/1.png" class="d-block w-100" alt="Lego">
            </div>

            <div class="carousel-item">
                <img src="assets/images/311.png" class="d-block w-100" alt="Hot Wheels">
            </div>

            <div class="carousel-item">
                <img src="assets/images/5.png" class="d-block w-100" alt="Airplanes">
            </div>

        </div>
    </div>
</div>
<!-- Autoplaying carousel Bootstrap  END-->

<!-- MAIN BLOCK START -->

    <div class="container">
        <div class="container row">
        <!-- main content -->
            <div class="main-content col-md-9 col-12">
                <h2>Последние события</h2>
                <div class="post row">
                    <div class="img col-12 col-md-4">
                        <img src="assets/images/2.png" alt="something">
                    </div>
                    <div class="post_text col-12 col-md-8">
                        <h3>
                            <a href="#">название статьи</a>
                        </h3>
                        <i class="far fa-user icon-with-text"></i><i>Имя Автора</i>
                        <i class="far fa-calendar icon-with-text"></i><i>11 Марта, 2019</i>
                        <p class="preview-text">сказ о том, как Макс в Lego играл</p>
                    </div>
                </div>
                <div class="post row">
                    <div class="img col-12 col-md-4">
                        <img src="assets/images/2.png" alt="something">
                    </div>
                    <div class="post_text col-12 col-md-8">
                        <h3>
                            <a href="#">название статьи</a>
                        </h3>
                        <i class="far fa-user icon-with-text"></i><i>Имя Автора</i>
                        <i class="far fa-calendar icon-with-text"></i><i>11 Марта, 2019</i>
                        <p class="preview-text">сказ о том, как Макс в Lego играл</p>
                    </div>
                </div>
                <div class="post row">
                    <div class="img col-12 col-md-4">
                        <img src="assets/images/2.png" alt="something">
                    </div>
                    <div class="post_text col-12 col-md-8">
                        <h3>
                            <a href="#">название статьи</a>
                        </h3>
                        <i class="far fa-user icon-with-text"></i><i>Имя Автора</i>
                        <i class="far fa-calendar icon-with-text"></i><i>11 Марта, 2019</i>
                        <p class="preview-text">сказ о том, как Макс в Lego играл</p>
                    </div>
                </div>
                <div class="post row">
                    <div class="img col-12 col-md-4">
                        <img src="assets/images/2.png" alt="something">
                    </div>
                    <div class="post_text col-12 col-md-8">
                        <h3>
                            <a href="#">название статьи</a>
                        </h3>
                        <i class="far fa-user icon-with-text"></i><i>Имя Автора</i>
                        <i class="far fa-calendar icon-with-text"></i><i>11 Марта, 2019</i>
                        <p class="preview-text">сказ о том, как Макс в Lego играл</p>
                    </div>
                </div>

            </div>

            <div class="sidebar col-md-3 col-12">

                <div class="section search">
                    <h3>Поиск</h3>
                    <form action="/" method="post">
                        <input type="text" name="search-term" class="text-input" placeholder="ищем...">
                    </form>
                </div>
                <div class="selection age">
                    <h3>Возраст</h3>
                    <ul>
                        <li><a href="#">первый год</a></li>
                        <li><a href="#">второй год</a></li>
                        <li><a href="#">третий год</a></li>
                        <li><a href="#">четвертый год</a></li>
                        <li><a href="#">пятый год</a></li>
                        <li><a href="#">шестой год</a></li>
                        <li><a href="#">седьмой год</a></li>


                    </ul>
                </div>

            </div>
        </div>
    </div>

<!-- MAIN BLOCK END -->

<!-- FOOTER START -->
<?php include("app/include/footer.php") ?>































































