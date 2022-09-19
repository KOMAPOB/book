<?php
    require_once '../config/connect.php';
    $book_id = $_GET['id'];
    $book = mysqli_query($connect, "SELECT * FROM `book` WHERE `id`='$book_id'");
    $book = mysqli_fetch_assoc($book);
?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Редактирование</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    
<h2>Редактирование</h2>
    <form action="addupdate.php" method="post" class="add-book">
        <input type="hidden" name="id" value="<?php echo $book_id?>">
        <p class="form-book">Название книги</p>
        <input type="text" name="nameBook" value="<?php echo $book['nameBook'] ?>">
        <p class="form-book">Автор книги</p>
        <input input type="text" name="author" value="<?php echo $book['author'] ?>">
        <div class="button">
            <button type="submit">Изменить</button>
        </div>
    </form>

</body>
</html>