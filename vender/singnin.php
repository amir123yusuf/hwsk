<?php

session_start();
require_once 'connect.php';

$login = $_POST['login'];
$password = $_POST['password'];

$chech_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` AND `$password`");
if (mysqli_num_rows($chech_user) > 0) {

    $_SESSION['user'] = [
        "id" => $user['id'],
        "full_name" => $user['full_name'],
        "email" => $user['email']
    ];
} else {
    $_SESSION['message'] = 'Не верный логин или пароль';
    header('Location: ../index.php');
}