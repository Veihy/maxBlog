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



            <div class="single_post row">
                <div class="img col-12">
                    <img src="assets/images/2.png" alt="something">
                </div>
                <div class="single_post_text col-12">
                    <h3>
                        <a href="#">название статьи</a>
                    </h3>
                    <div class="info">
                    <i class="far fa-user icon-with-text"></i><i>Имя Автора</i>
                    <i class="far fa-calendar icon-with-text"></i><i>11 Марта, 2019</i>
                    </div>
                    <article>
                        <h1>История про Максима и его Лего</h1>
                        <p>Однажды Максим решил построить что-то невероятное из своего любимого конструктора Лего. На столе уже лежали коробки с разными деталями: колеса, блоки разных цветов и форм, а также множество минифигурок, которые только ждали, когда их пригласят в игру.</p>
                        <p>Максим начал с того, что построил огромную башню. Она была выше всех его игрушек, и почти доставала до полки с книгами. Башня состояла из блоков всех цветов радуги и выглядела действительно впечатляюще. Но Максиму хотелось чего-то более интересного.</p>
                        <p>Затем он решил построить машину для своих минифигурок. Сначала он выбрал колеса, а затем прикрепил к ним основу. Машина получилась крепкой и быстрой, и Максим был очень доволен. Он посадил в неё водителя, а затем добавил пассажиров — все минифигурки сели на свои места и были готовы к приключениям!</p>
                        <p>Когда машина была готова, Максим построил дорогу из длинных серых и зеленых блоков, по которой она могла ездить. Он сделал повороты и мосты, и даже добавил маленький светофор, чтобы всё было по правилам. Максим играл, представляя, как его минифигурки едут в путешествие по сказочной стране, где впереди их ждут приключения и новые открытия.</p>
                        <p>Максим потратил на игру весь вечер, но это было того стоит — его воображение создало целый мир, и Лего помогло воплотить его мечты в реальность. В конце дня Максим аккуратно разобрал все постройки и сложил детали в коробки, чтобы завтра снова начать что-то новое.</p>
                    </article>
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




























































