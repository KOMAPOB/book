<?php
    require_once '../config/connect.php';
    $nameBook = $_POST['nameBook'];
    $author = $_POST['author'];

    mysqli_query($connect, "INSERT INTO `book` (`id`, `nameBook`, `author`) VALUES (NULL, '$nameBook', '$author')");

    header('Location: /');
?>