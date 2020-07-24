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

<?php require "blocks/header.php" ?>

<div class="container mt-5">
    <h3>Paldies par jūsu atsauksmi!</h3> <Br>

    <a class="btn btn-outline-primary" href="Comforma.php">Atpakaļ</a>


<?php require "blocks/footer.php" ?>

<?php
try {
    $conn = new PDO("mysql:host=localhost; dbname=ceptuve", 'root', '');
    if(empty($_POST['name'])) exit("");
    if(empty($_POST['content'])) exit("");
    $query = "INSERT INTO message VALUES (NULL, :name, NOW())";
    $msg = $conn->prepare($query);
    $msg->execute(['name' => $_POST['name']]);
    $msg_id = $conn->lastInsertId();
    $query = "INSERT INTO message_content VALUES (NULL, :content, :message_id)";
    $msg = $conn->prepare($query);
    $msg->execute(['content' => $_POST['content'], 'message_id' => $msg_id]);
}
catch (PDOException $e)
{
    echo "error" .$e->getMessage() ;
}
?>
