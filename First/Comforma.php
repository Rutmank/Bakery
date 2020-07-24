<?php session_start(); ?>
<?php require "db.php"?>
<!Doctype html>
<html lang="lv" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8"> <!-- кодировка-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- сжатие сайта для мобильных устройств -->
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> <!-- адаптивность под браузер Edge ( оптимизация, не существенно ) -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> <!-- ссылка на стили -->
    <link rel="stylesheet" href="styles/style.css"> <!-- ссылка на папку со стилями -->
</head>

<?php include "blocks/header.php" ?>


<body>
<div class="container mt-5">
    <h3>Sazinieties ar mums</h3>
<form action="comment.php" method="post">
    <input type="text" name="name" placeholder="Ievadiet savu vardu vai loginu" class="form-control"> <br>
    <textarea name="content" class="form-control" placeholder="Ievadiet savu ziņojumu"></textarea> <br>
    <input type="submit" value="Iesniegt" class="btn btn-outline-primary">
</form>
</body>



<?php require "blocks/footer.php" ?>