<?php
include "app/database/db.php";
if(isset($_POST["login"])){
    $admin = 0;
    $login = $_POST['login'];
    $email = $_POST['email'];
    $password = password_hash($_POST['pass-second'], PASSWORD_DEFAULT);


    $post = ["admin" => $admin, "username" => $login, "email" => $email, "password" => $password];
    insert($pdo, 'users', $post);
//    tt($post);
//    $id = $pdo->lastInsertId();
//    echo $id;
}