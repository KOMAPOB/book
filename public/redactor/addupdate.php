<?php
    require_once '../config/connect.php';
    $nameBook = $_POST['nameBook'];
    $author = $_POST['author'];
    $id = $_POST['id'];

    mysqli_query($connect, "UPDATE `book` SET `nameBook` = '$nameBook', `author` = '$author' WHERE `book`.`id` = '$id'");

    header('Location: /');
?>