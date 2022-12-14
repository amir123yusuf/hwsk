<?php
    $db="ruff";

    $connect = mysqli_connect('localhost', 'root', '', 'users');

    if (!$connect) {
        die('Error connect to DataBase');
    } else {
        echo ('vse good');
    }