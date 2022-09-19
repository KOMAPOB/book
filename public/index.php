<?php
    require_once 'config/connect.php';
    $book = mysqli_query($connect, "SELECT * FROM `book`");
    $book = mysqli_fetch_all($book);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>CRUD Books</title>
</head>
<body>
    <h1>Список книг</h1>
    <table class="table">
        <tr class="first-line">
            <th>ID</th>
            <th>Name Book</th>
            <th>Author</th>
            <th>UPD</th>
            <th>DELETE</th>
        </tr>
        <?php
            foreach($book as $item){
                ?>
                    <tr>
                        <th><?php echo $item[0]?></th>
                        <th><?php echo $item[1]?></th>
                        <th><?php echo $item[2]?></th>
                        <th><a href="redactor/update.php?id=<?php echo $item[0] ?>">Изменить</th>
                        <th><a href="redactor/delete.php?id=<?php echo $item[0] ?>">Удалить</th>
                    </tr>
                <?php
            }
        ?>
    </table>
    <h2>Добавить новую книгу</h2>
    <form action="redactor/create.php" method="post" class="add-book">
        <p class="form-book">Название книги</p>
        <input type="text" name="nameBook">
        <p class="form-book">Автор книги</p>
        <input input type="text" name="author">
        <div class="button">
            <button type="submit">Добавить</button>
        </div>
    </form>

</body>
</html>