<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    
    <form action="vender/singup.php" method="post">
        <label>ФИО</label>
        <input type="text" name="full_name" placeholder="Введите своё полное имя">
        <label>Логин</label>
        <input type="text" name="login" placeholder="Введите свой логин">
        <label>Почта</label>
        <input type="email" name="email" placeholder="Введите свою почту">
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Введите пароль">
        <label>Подтвердите пароль</label>
        <input type="password" name="password_confirm" placeholder="Подтвердите пароль">

        <button type="submit">Войти</button>
        <p>
            у уже есть аккаунт - <a href="index.php">Авторизируйтесь!</a>
        </p>
        <?php
            if ($_SESSION['message']) {
                echo '<p class="msg"> ' . $_SESSION['message'] . '</p>' ;
            }
            unset($_SESSION['message']);
        ?>
    </form>
</body>
</html>