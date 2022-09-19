<?php
    $connect = mysqli_connect('localhost', 'root', '', 'book-bd');
    if (!$connect) {
        die("Ошибка подключения к БД");
    }
?>