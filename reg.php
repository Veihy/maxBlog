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
<div class="container reg">
    <div class="regword">
        <h2>Регистрация</h2>
    </div>
<form method="post" action="reg.html">

    <div class="mb-3">
    <label for="formGroupExampleInput" class="form-label">Имя</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Введите имя">
</div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Введите email">
<!--        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Пароль</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Введите пароль">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword2" class="form-label">Подтверждение пароля</label>
        <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Подтвердите пароль">
    </div>
    <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">&nbsp;&nbsp;&nbsp;Запомнить меня</label>
    </div>
    <button type="button" class="btn btn-secondary">Регистрация</button>
    <a href="log.php" class="reg_form" >Войти</a>

</form>
</div>
<!-- FOOTER START -->
<?php include("app/include/footer.php") ?>



